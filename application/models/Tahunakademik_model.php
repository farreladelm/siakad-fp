<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahunakademik_model extends CI_Model
{
    private $table_name;
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "akademik_tahun_akademik";
    }

    public function get($id = null)
    {
        if (!is_null($id)) return $this->db->get_where($this->table_name, ['tahun_akademik_id' => $id])->result_array()[0];
        return $this->db->get($this->table_name)->result_array();
    }

    public function get_name()
    {
        $this->db->select('tahun_akademik_id,tahun');
        $data = $this->db->get($this->table_name)->result_array();
        $temp = array();
        foreach ($data as $item) {

            $temp[$item['tahun_akademik_id']] = $item['tahun'];
        }
        return $temp;
    }

    public function insert($data)
    {
        return $this->db->insert($this->table_name, $data);
    }

    public function update($id, $data)
    {
        return $this->db->update($this->table_name, $data, ['tahun_akademik_id' => $id]);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table_name, ['tahun_akademik_id' => $id]);
    }
}
