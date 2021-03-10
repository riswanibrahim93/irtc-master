<?php 

class Kategori_lomba extends CI_Model {
    private $table = 'kategori_lomba';

    public function get()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table);
    }

    public function getById($id)
    {
        $this->db->where('id', $id);
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }


}