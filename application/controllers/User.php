<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

    private function form_validation_rules($new = false, $is_unique = true)
    {
        $unique = $is_unique ? '|is_unique[users.username]' : '';
        $this->form_validation->set_rules('username', 'username', 'required|trim' . $unique);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('level', 'Level', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
        if ($new) {
            $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]', [
                'matches' => 'password dont match!',
                'min_length' => 'Password too short!'
            ]);
            $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
        }
    }


    public function index()
    {
        $data['page_title'] = 'Pengguna Sistem';
        $data['sidebar'] = 'pengguna sistem';
        $data['users'] = $this->user_model->get();
        // print_r($data['users']);
        $this->template_view->load('user/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Buat Pengguna Baru';
        $data['sidebar'] = 'pengguna sistem';
        // melakukan validasi form
        $this->form_validation_rules(true, true);

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            return $this->template_view->load('user/create', $data);
        }
        // membuat data array untuk query ke db (harus urut sesuai db)
        $data = [
            'username' => htmlspecialchars(str_replace(" ", "", $this->input->post('username', true))),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'level' => htmlspecialchars($this->input->post('level', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
        ];

        // menginputkan data registrasi
        if ($this->user_model->insert($data)) {
            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan pengguna baru</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menambahkan pengguna baru</div>');
        }

        // redirect ke controller user
        return redirect('user');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Pengguna';
        $data['sidebar'] = 'pengguna sistem';
        $user = $this->user_model->get($id);
        $data['user'] = $user;
        // validasi form
        // apply unique rules ketika input username tidak sesuai dengan nilai pada db
        $this->form_validation_rules(false, ($user['username'] != $this->input->post('username')));

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // print_r($this->form_validation->run());
            return $this->template_view->load('user/edit', $data);
        }
        $data = [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'level' => htmlspecialchars($this->input->post('level', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
        ];

        // menginputkan data registrasi
        if ($this->user_model->update($id, $data)) {
            // memberikan flashdata message kalau berhasil update
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan pengguna baru</div>');
        } else {
            // memberikan flashdata message kalau gagal update
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Berhasil menambahkan pengguna baru</div>');
        }
        // redirect ke controller user
        return redirect('user');
    }

    public function delete($id)
    {
        if ($this->user_model->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus Pengguna</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus pengguna</div>');
        }
        redirect('user');
    }
}
