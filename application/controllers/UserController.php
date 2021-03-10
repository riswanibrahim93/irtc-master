<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('UserAuthCheck');
        $this->userauthcheck->is_user();
        $this->load->model('user');
        $this->load->model('anggota_tim');
        $this->load->model('custom_model');
        $this->load->model('pembayaran');
        $this->load->model('kategori_lomba');
    }
    
    public function index()
    {
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->form_validation->set_rules('nama_anggota[]', 'Nama anggota', 'trim|required');
        $this->form_validation->set_rules('email_anggota[]', 'Email anggota', 'trim|required|valid_email|is_unique[anggota_tim.email]');
        $this->form_validation->set_rules('alamat_anggota[]', 'Alamat anggota', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-warning alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        if ($this->form_validation->run() == FALSE){
            $user = $this->custom_model->getUserById($this->session->userdata('id'))->row();
            $anggota = $this->custom_model->getTotalAnggota($user->id)->row();
            $anggota_tim = $this->custom_model->getAnggota($user->id)->result();
            return view('user.profile', ['user' => $user, 'anggota_tim' => $anggota_tim, 'total_anggota' => $anggota->total]);
        }else {
            for ($i=0; $i< count($_POST['email_anggota']); $i++){
                $nama_anggota =  $_POST['nama_anggota'][$i];
                $email_anggota =  $_POST['email_anggota'][$i];
                $alamat_anggota =  $_POST['alamat_anggota'][$i];
                $data = [
                    'nama_anggota' => $nama_anggota,
                    'alamat' => $alamat_anggota,
                    'email' => $email_anggota,
                    'user_id' => $this->session->userdata('id'),
                ];
                $this->anggota_tim->insert($data);
            }
            redirect('dashboard');
        }
    }

    public function pembayaran()
    {
        $this->load->library('form_validation');
        if (empty($_FILES['bukti_pembayaran']['name']))
        {
            $this->form_validation->set_rules('userfile', 'Document', 'required');
        }
        $this->form_validation->set_rules('user', 'Data user ', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-warning alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>');
        $id = $this->session->userdata('id');
        $pembayaran = $this->custom_model->getDataPembayaran($id);

        if ($this->form_validation->run() == FALSE)
        {
            return view('user.pembayaran', ['pembayaran' => $pembayaran]);
        }else {
            $config['upload_path']          = './img/bukti_transfer/';
            $config['allowed_types']        = 'gif|jpg|png';
            
            $config['encrypt_name']         = true;


            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('bukti_pembayaran'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->session->set_flashdata([
                        'btn' => 'danger',
                        'message' => $error['error']
                    ]);
                    redirect('pembayaran');
            }
            else
            {
                    $userfile = $this->upload->data();
                    $cekPembayaran = $this->pembayaran->getWhere($id)->row();
                    //print_r($userfile);exit();
                    $data = [
                        'user_id' => $id,
                        'bukti_transfer' => $userfile['file_name'],
                        'status' => 1,
                    ];
                    if ($cekPembayaran){
                        $this->pembayaran->update($data, $id);
                    }else {
                        $this->pembayaran->insert($data);
                    }
                    redirect('pembayaran');
            }
        }
    }

    public function kompetisi()
    {
        return view('user.kompetisi');
    }

    public function profile()
    {
        $user = $this->custom_model->getUserById($this->session->userdata('id'))->row();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_team', 'Nama tim', 'trim|required');
        $this->form_validation->set_rules('nama_ketua', 'Nama ketua', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('jumlah_anggota', 'Jumlah Anggota', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('kategori_lomba', 'Kategori lomba', 'trim|required');
        
         $this->form_validation->set_error_delimiters('<div class="alert alert-warning alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>'); 
        $kategori_lomba = $this->kategori_lomba->get()->result();
        if ($this->form_validation->run() == FALSE)
        {
            return view('user.edit-profile', [
                    'user' => $user,
                    'kategori_lomba' => $kategori_lomba
                ]);
        }
        else 
        {
            if ($this->input->post('jumlah_anggota') < $user->jumlah_anggota){
                $this->anggota_tim->delete($user->id);
            }
            $nama_tim = $this->input->post('nama_team', true);
            $nama_ketua = $this->input->post('nama_ketua', true);
            $email = $this->input->post('email', true);
            $alamat = $this->input->post('alamat', true);
            $kategori_lomba = $this->input->post('kategori_lomba', true);
            $jumlah_anggota = $this->input->post('jumlah_anggota');

            $data = [
                    'nama_tim' => $nama_tim,
                    'nama_ketua' => $nama_ketua,
                    'email' => $email,
                    'alamat' => $alamat,
                    'jumlah_anggota' => $jumlah_anggota,
                    'kategori_lomba_id' => $kategori_lomba,
                ];
            $update = $this->user->update($data, $user->id);
            if ($update){
                $flashData = ['btn' => 'success', 'message' => 'Profil berhasil di edit'];
                $this->session->set_flashdata($flashData);
                redirect('dashboard');
            }else {
                redirect('profile');
            }
        }
    }

    public function password()
    {
        $user = $this->custom_model->getUserById($this->session->userdata('id'))->row();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_error_delimiters('<div class="alert alert-warning alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>');
        if ($this->form_validation->run() == FALSE)
        {
            return view('user.password');
        }
        else 
        {
            $password = $this->input->post('password');
            $data = [
                'password' => $password
            ];
            $this->user->update($data, $user->id);
            $flashData = ['btn' => 'success', 'message' => 'Password berhasil di edit'];
            $this->session->set_flashdata($flashData);
            redirect('password');
        }

    }
}
