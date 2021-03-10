<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authadmin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin');
        $this->load->model('custom_model');
      
    }

    public function login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username ', 'trim|required');
        $this->form_validation->set_rules('password', 'Password ', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-warning alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>');
        if ($this->form_validation->run() == FALSE)
        {
            return view('auth.admin.login');
        }else {
            $username = $this->input->post('username', true);
            $password = $this->input->post('password', true);

            $login = $this->custom_model->cekAdminLogin($username, $password);
            if ($login){
                $data = [
                    'id' => $login->id,
                    'is_admin' => true,
                ];
                $this->session->set_userdata($data);
                redirect('panitia');
            }else{
                $flash_message = [
                    'message' => 'Login gagal',
                    'btn' => 'warning'
                ];
                $this->session->set_flashdata($flash_message);
                redirect(base_url('panitia/login'));
            }
        }
    }

    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }
}