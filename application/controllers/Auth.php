<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }

    public function logged_in()
    {
        return $this->session->userdata('username') ? true : false;
    }

    public function index()
    {
        if ($this->logged_in()) {
            redirect('auth/logout');
        }
        // memberikan rules
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        // jika form tidak tervalidasi
        if ($this->form_validation->run() == false) {
            // tampilkan halaman login
            $this->load->view('auth/login');
        }
        // jika form tervalidasi
        else {
            // melakukan login
            $this->_login();
        }
    }

    private function _login()
    {
        // mengambil input
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // membuat query
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        // check apakah user ada --> !null
        if ($user) {
            // check apakah input password sesuai dengan password di database
            if (password_verify($password, $user['password'])) {
                // membuat data untuk session
                $data = [
                    'id' => $user['user_id'],
                    'nama' => $user['nama'],
                    'username' => $user['username'],
                    'level' => $user['level'],
                ];


                // set_userdata untuk session
                $this->session->set_userdata($data);
                $this->session->set_flashdata('login_ok', "<div class='alert alert-success'>
                Selamat datang kembali, {$user['nama']}! </div>");

                redirect('welcome');
            }
            // password salah
            else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password!
                </div>');
                redirect('auth');
            }
        }
        // tidak ditemukan user dengan email yang sesuai
        else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Wrong username or password!
          </div>');
            redirect('auth');
        }
    }

    public function register()
    {
        if ($this->logged_in()) {
            redirect('auth/logout');
        }
        // melakukan validasi form
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            $this->load->view('auth/register');
        }
        // jika validasi berhasil
        else {
            // membuat data array untuk query ke db (harus urut sesuai db)
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'level' => 2,
            ];
            // menginputkan data registrasi
            $this->db->insert('users', $data);

            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Welcome, new user! Lets login!</div>');

            // redirect ke controller auth, atau login
            redirect('auth');
        }
    }

    public function logout()
    {
        // unset userdata yang di set ketika login
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');

        // membuat flashdata message untuk menandakan berhasil logout
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Kamu berhasil Logout
          </div>');

        // redirect ke halaman login
        redirect('auth');
    }
}
