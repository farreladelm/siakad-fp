<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get($id = null)
    {
        if ($id) return $this->db->get_where('users', ['user_id' => $id])->result_array()[0];
        return $this->db->get('users')->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert('users', $data);
    }

    public function update($id, $data)
    {
        return $this->db->update('users', $data, ['user_id' => $id]);
    }

    public function delete($id)
    {
        return $this->db->delete('users', ['user_id' => $id]);
    }
}
