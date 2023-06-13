<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah_model extends CI_Model
{
    public function get($id = null)
    {
        if (!is_null($id)) return $this->db->get_where('makul_matakuliah', ['makul_id' => $id])->result_array()[0];
        return $this->db->get('makul_matakuliah')->result_array();
    }

    public function get_name()
    {
        $this->db->select('makul_id, nama_makul');
        $data = $this->db->get('makul_matakuliah')->result_array();
        $temp = array();
        foreach ($data as $item) {
            $temp[$item['makul_id']] = $item['nama_makul'];
        }
        return $temp;
    }



    public function count_all()
    {
        return $this->db->get('makul_matakuliah')->num_rows();
    }

    public function insert($data)
    {
        return $this->db->insert('makul_matakuliah', $data);
    }

    public function update($id, $data)
    {
        return $this->db->update('makul_matakuliah', $data, ['makul_id' => $id]);
    }

    public function delete($id)
    {
        return $this->db->delete('makul_matakuliah', ['makul_id' => $id]);
    }
}
