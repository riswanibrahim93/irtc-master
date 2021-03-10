<?php 

class Custom_model extends CI_Model{

    public function getUserByEmail($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('users')->row();
    }
    
    public function getUserById($id)
    {
        $this->db->select([
            'users.id', 'users.nama_tim', 'users.nama_ketua', 'users.email', 'users.alamat',
            'kategori_lomba.nama_lomba', 'users.jumlah_anggota', 'users.kategori_lomba_id'
        ]);
        $this->db->where('users.id', $id);
        $this->db->from('users');
        $this->db->join('kategori_lomba', 'users.kategori_lomba_id = kategori_lomba.id');
        return $this->db->get();
    }

    public function cekUserLogin($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        return $this->db->get('users')->row();
    }
    
    public function cekAdminLogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        return $this->db->get('admin')->row();
    }

    public function getAnggota($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->get('anggota_tim');
    }

    public function getDataPembayaran($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->get('pembayaran')->row();
    }

    public function getUsers()
    {
        $this->db->select([
            'users.id', 'users.nama_tim', 'users.nama_ketua', 'users.email', 'users.alamat',
            'kategori_lomba.nama_lomba', 'users.jumlah_anggota', 'pembayaran.status AS status_pembayaran'
        ]);
        $this->db->from('users');
        $this->db->join('pembayaran', 'users.id = pembayaran.user_id', 'left');
        $this->db->join('kategori_lomba', 'users.kategori_lomba_id = kategori_lomba.id');
        return $this->db->get();
    }

    public function getPembayaran()
    {
        $this->db->select(['pembayaran.*', 'users.nama_tim', 'kategori_lomba.nama_lomba']);
        $this->db->join('users', 'pembayaran.user_id = users.id');
        $this->db->join('kategori_lomba', 'users.kategori_lomba_id = kategori_lomba.id');
        return $this->db->get('pembayaran');
    }

    public function getTotalAnggota($userId)
    {
        $this->db->where('user_id', $userId);
        $this->db->select('COUNT(id) as total');
        return $this->db->get('anggota_tim');
    }
}