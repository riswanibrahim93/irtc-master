<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authuser extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_lomba');
        $this->load->model('user');
        $this->load->model('custom_model');
        $this->load->helper('custom_helper');
    }

    public function login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email ', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password ', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-warning alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>');
        if ($this->form_validation->run() == FALSE)
        {
            return view('auth.login');
        }else {
            $email = $this->input->post('email', true);
            $password = $this->input->post('password', true);

            $login = $this->custom_model->cekUserLogin($email, $password);
            if ($login){
                $data = [
                    'id' => $login->id,
                    'is_user' => true,
                    'nama_tim' => $login->nama_tim,
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            }else{
                $flash_message = [
                    'message' => 'Login gagal',
                    'btn' => 'warning'
                ];
                $this->session->set_flashdata($flash_message);
                redirect(base_url('login'));
            }
        }
    }

    public function register()
    {
        $this->load->helper('custom_helper');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_team', 'Nama tim', 'trim|required');
        $this->form_validation->set_rules('nama_ketua', 'Nama ketua', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('jumlah_anggota', 'Jumlah Anggota', 'trim|required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('kategori_lomba', 'Kategori lomba', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_error_delimiters('<div class="alert alert-warning alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>'); 

        if ($this->form_validation->run() == FALSE)
        {
            $kategori_lomba = $this->kategori_lomba->get()->result();
            return view('auth.register', ['kategori_lomba' => $kategori_lomba]);
        }else {
            $nama_tim = $this->input->post('nama_team', true);
            $nama_ketua = $this->input->post('nama_ketua', true);
            $email = $this->input->post('email', true);
            $alamat = $this->input->post('alamat', true);
            $kategori_lomba = $this->input->post('kategori_lomba', true);
            $password = $this->input->post('password', true);
            $jumlah_anggota = $this->input->post('jumlah_anggota');            
            
            $ci = get_instance();
            $ci->load->library('email');
            $config['protocol'] = "smtp";
            $config['smtp_host'] = "www.credia.id";
            $config['smtp_user'] = "no-reply@credia.id";
            $config['smtp_pass'] = "motiveid123";
            $config['charset'] = "utf-8";
            $config['mailtype'] = "html";
            $config['newline'] = "\r\n";
          
        
        
            $ci->email->initialize($config);
            $ci->email->set_header('To', '"' . $nama_ketua . '" <'. $email . '>');
            $ci->email->from('no-reply@credia.id', 'Creative Development Idea');
            $ci->email->to($email);
            $ci->email->subject('Verifikasi Akun Credia');
            $user_verivication = base64_url_encode($email);
            $ci->email->message('
            <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:100"
      rel="stylesheet"
    />
    <title>CREDIA.ID</title>
    <style>
    * {
    font-family: arial, "Montserrat", sans-serif;
    color: #606062;
    }

    body {
        background-color: #eee;
        margin: 0;
        padding: 0;
    }

    .content {
        font-weight: 500;
        margin: 30px auto;
        text-align: justify;
    }

    .socials {
        margin: 15px 5px 0 5px;
    }

    .footer p {
        padding: 0px 32px 0px 32px;
        font-weight: bold;
        font-family: arial;
        font-size: 12px;
        text-align: center;
        color: #fff;
    }

    @media only screen and (max-width: 640px) {
        body[yahoo] .deviceWidth {
            width: 440px !important;
            padding: 0;
        }

        body[yahoo] .center {
            text-align: center !important;
        }
    }

    @media only screen and (max-width: 479px) {
        body[yahoo] .deviceWidth {
            width: 280px !important;
            padding: 0;
        }

        body[yahoo] .center {
            text-align: center !important;
        }
    }
    </style>
  </head>

  <body yahoo="fix">
    <!-- HEADER -->
    <table
      style="min-width:300px;"
      width="600"
      border="0"
      cellpadding="0"
      cellspacing="0"
      align="center"
      class="deviceWidth"
    >
      <tr>
        <td align="center">
          <img
            class="deviceWidth"
            style="max-width:600px;display: block;"
            src="https://i.ibb.co/V2QDpS5/Mail.jpg"
            alt="CREDIA.ID"
          />
        </td>
      </tr>
    </table>

    <!-- HEADER -->

    <!-- CONTENT -->
    <table
      width="600"
      border="0"
      cellpadding="0"
      cellspacing="30"
      align="center"
      class="deviceWidth"
      bgcolor="#fefefe"
    >
    

      <tr class="content">
        <td>
          <img
            class="deviceWidth"
            src="https://i.ibb.co/3Cdgwtq/mail-event.jpg"
            alt="CREDIA.ID"
            style="max-width:540px;display: block;"
          />
        </td>
      </tr>

      <tr class="content">
        <td>
          <p style="text-indent: 50px;">
            Terima kasih telah berpartisipasi dalam event credia,
            Kode verifikasi anda adalah <b>'.$user_verivication.'</b> atau
            Klik link di bawah ini untuk memverifikasi akun anda
          </p>
        </td>
      </tr>

    
      <tr class="content">
        <td style="text-align:center;">
        
          <a href="http://credia.id/verifikasi-akun?kode_verifikasi='.$user_verivication.'"
            ><img
              style="max-width:100px;"
              src="https://i.ibb.co/6bfHJCd/ver-ico.png"
              alt="Verifikasi Akun"
          /></a>
        </td>
      </tr>
    </table>

    <!-- End of Content -->

    <!-- Footer -->
    <table
      width="600"
      border="0"
      cellpadding="0"
      cellspacing="0"
      align="center"
      class="deviceWidth"
      style="background-image:linear-gradient(to right, #da3dff, #06e7fb);;"
    >
      <tr>
        <td align="center">
          <table border="0" cellspacing="0" cellpadding="0">
              <td  class="socials">
                <!-- FACEBOOK -->
                <a href="https://web.facebook.com/Credia.ID2019/"
                  ><img
                    src="https://i.ibb.co/R0NjfdG/ico-fb.png"
                    width="32"
                    height="32"
                    class="socials""
                    /></a>
              </td>

              <td>
                <!-- INSTAGRAM -->
                <a
                  href="https://instagram.com/credia.id?utm_source=ig_profile_share&igshid=10x56bz9ajts9"
                  ><img
                    src="https://i.ibb.co/Q6YdyCn/ico-insta.png"
                    width="32"
                    height="32"
                    class="socials""
                /></a>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr class="footer">
        <td><p>Copyright 2019 – Credia.id</p></td>
      </tr>
    </table>

    <!-- End of Footer -->
  </body>
</html>
            ');
        
        
            if ($this->email->send()) {
                $data = [
                    'nama_tim' => $nama_tim,
                    'nama_ketua' => $nama_ketua,
                    'email' => $email,
                    'alamat' => $alamat,
                    'jumlah_anggota' => $jumlah_anggota,
                    'kategori_lomba_id' => $kategori_lomba,
                    'password' => md5($password),
                ];
                
            } else {
                $data = [
                    'nama_tim' => $nama_tim,
                    'nama_ketua' => $nama_ketua,
                    'email' => $email,
                    'alamat' => $alamat,
                    'jumlah_anggota' => $jumlah_anggota,
                    'kategori_lomba_id' => $kategori_lomba,
                    'password' => md5($password),
                ];
            }
            $this->user->insert($data);
            redirect(base_url('verifikasi-akun'));
        }
    }

    public function verifikasi_akun()
    {
        if (!isset($_GET['kode_verifikasi'])) {
            $this->load->helper('form');
            return view('auth.verifikasi_akun');
        }else {
            $encode = $this->input->get('kode_verifikasi', true);
            $email  = base64_url_decode($encode);
            $user = $this->custom_model->getUserByEmail($email);
            if ($user) {
                $id = $user->id;
                $data = [
                    'is_confirmed' => 1,
                ];
                $this->user->update($data, $id);
                unset($_SESSION['id']);
                unset($_SESSION['is_user']);
                unset($_SESSION['nama_tim']);
                $data = [
                    'id' => $user->id,
                    'is_user' => true,
                    'nama_tim' => $user->nama_tim,
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            }else {
                show_error(['error' => 'User not found']);
            }
        }
    }
    
    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }

    
}
