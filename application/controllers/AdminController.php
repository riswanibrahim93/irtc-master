<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('AdminAuthCheck');
        $this->adminauthcheck->is_admin();
        $this->load->model('user');
        $this->load->model('anggota_tim');
        $this->load->model('custom_model');
        $this->load->model('pembayaran');
        $this->load->model('pembayaran');
    }

    public function index()
    {
        $users = $this->custom_model->getUsers()->result();
        return view('admin.index', ['users' => $users]);
    }

    public function pembayaran()
    {
        $pembayaran = $this->custom_model->getPembayaran()->result();
        return view('admin.pembayaran.index', ['pembayaran' => $pembayaran]);
    }

    public function prosesPembayaran($kind, $id)
    {
        switch ($kind) {
            case 'acc':
                $status = 0;
                break;                
            
            default:
                $status = 2;
                break;
        }
        $data = [
            'status' => $status
        ];
        $pudate = $this->pembayaran->update($data, $id);
        if ($pudate){
            redirect('panitia/pembayaran');
        }
    }

}
