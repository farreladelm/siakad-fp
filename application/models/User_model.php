<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $table_name;
    private $primary_id;
    public function __construct()
    {
        parent::__construct();
        $this->table_name = "users";
        $this->primary_id = "user_id";
    }
    public function get($id = null)
    {
        if ($id) return $this->db->get_where($this->table_name, [$this->primary_id => $id])->result_array()[0];
        return $this->db->get($this->table_name)->result_array();
    }

    public function get_count()
    {
        return $this->db->get($this->table_name)->num_rows();
    }

    public function user_by_username($username)
    {
        return $this->db->get_where($this->table_name, ['username' => $username])->row_array();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table_name, $data);
    }

    public function update($id, $data)
    {
        return $this->db->update($this->table_name, $data, [$this->primary_id => $id]);
    }

    public function update_last_login($id, $data)
    {
        return $this->db->update($this->table_name, $data, [$this->primary_id => $id]);
    }

    public function latest_user()
    {
        $this->db->select('*');
        $this->db->order_by('last_login', 'desc');
        $this->db->limit(5);
        $user = $this->db->get($this->table_name);
        return $user->result_array();
    }

    public function delete($id)
    {
        return $this->db->delete($this->table_name, [$this->primary_id => $id]);
    }
}
