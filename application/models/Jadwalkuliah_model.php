<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwalkuliah_model extends CI_Model
{
    private $table_name;
    private $primary_id;
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "akademik_jadwal_kuliah";
        $this->primary_id = "jadwal_id";
    }

    public function get($id = null)
    {
        if ($id) return $this->db->get_where($this->table_name, [$this->primary_id => $id])->result_array()[0];
        return $this->db->get($this->table_name)->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table_name, $data);
    }

    public function update($id, $data)
    {
        return $this->db->update($this->table_name, $data, [$this->primary_id => $id]);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table_name, [$this->primary_id => $id]);
    }
}
