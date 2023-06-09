<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen_model extends CI_Model
{
    private $table_name;
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "md_dosen";
    }

    public function get($id = null)
    {
        if (!is_null($id)) return $this->db->get_where($this->table_name, ['dosen_id' => $id])->result_array()[0];
        return $this->db->get($this->table_name)->result_array();
    }

    public function get_count()
    {
        return $this->db->get($this->table_name)->num_rows();
    }

    public function get_name()
    {
        $this->db->select('dosen_id, nama_lengkap');
        $data = $this->db->get($this->table_name)->result_array();
        $temp = array();
        foreach ($data as $item) {
            $temp[$item['dosen_id']] = $item['nama_lengkap'];
        }
        return $temp;
    }

    public function insert($data)
    {
        return $this->db->insert($this->table_name, $data);
    }

    public function update($id, $data)
    {
        return $this->db->update($this->table_name, $data, ['dosen_id' => $id]);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table_name, ['dosen_id' => $id]);
    }
}
