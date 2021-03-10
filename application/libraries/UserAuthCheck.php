<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAuthCheck {

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function is_user()
    {
        
        if (!$this->ci->session->userdata('is_user')){
            $flash_message = [
                'message' => 'Anda belum login',
                'btn' => 'danger'
            ];
            $this->ci->session->set_flashdata($flash_message);
            redirect(base_url('login'));
        }
    }
}