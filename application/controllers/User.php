<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['page_title'] = 'User';
        $data['users'] = $this->user_model->get();
        // print_r($data['users']);
        $this->template_view->load('user/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Buat Pengguna Baru';
        // melakukan validasi form
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('level', 'Level', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            $this->template_view->load('user/create', $data);
        }
        // jika validasi berhasil
        else {
            // membuat data array untuk query ke db (harus urut sesuai db)
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'level' => htmlspecialchars($this->input->post('level', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
            ];

            // menginputkan data registrasi
            $this->db->insert('user', $data);

            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan pengguna baru</div>');

            // redirect ke controller auth, atau login
            redirect('user');
        }
    }

    public function edit($id)
    {
        $user = $this->user_model->get($id);
        // print_r($user);
        $data['user'] = $user;
        $data['page_title'] = 'Edit Pengguna';
        $this->template_view->load('user/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'level' => htmlspecialchars($this->input->post('level', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
        ];

        // menginputkan data registrasi
        $this->db->update('user', $data, ['user_id' => $id]);

        // memberikan flashdata message kalau registrasi berhasil
        $this->session->set_flashdata('message', '<div class="alert alert-success">
        Berhasil menambahkan pengguna baru</div>');

        // redirect ke controller auth, atau login
        redirect('user');
    }

    public function delete($id)
    {
        $this->db->delete('user', ['user_id' => $id]);
        if ($this->db->affected_rows('user')) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus Pengguna</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus pengguna</div>');
        }
        redirect('user');
    }
}
