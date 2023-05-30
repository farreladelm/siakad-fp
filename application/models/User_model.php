<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get($id = null)
    {
        if ($id) return $this->db->get_where('user', ['user_id' => $id])->result_array()[0];
        return $this->db->get('user')->result_array();
    }
}
