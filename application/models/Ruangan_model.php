<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ruangan_model extends CI_Model
{
    private $table_name;
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "md_ruangan";
    }

    public function get($id = null)
    {
        if ($id) return $this->db->get_where($this->table_name, ['ruangan_id' => $id])->result_array()[0];
        return $this->db->get($this->table_name)->result_array();
    }

    public function get_count()
    {
        return $this->db->get($this->table_name)->num_rows();
    }

    public function get_name()
    {
        $this->db->select('ruangan_id, nama_ruangan');
        $data = $this->db->get($this->table_name)->result_array();
        $temp = array();
        foreach ($data as $item) {
            $temp[$item['ruangan_id']] = $item['nama_ruangan'];
        }
        return $temp;
    }

    public function insert($data)
    {
        return $this->db->insert($this->table_name, $data);
    }

    public function update($id, $data)
    {
        return $this->db->update($this->table_name, $data, ['ruangan_id' => $id]);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table_name, ['ruangan_id' => $id]);
    }
}
