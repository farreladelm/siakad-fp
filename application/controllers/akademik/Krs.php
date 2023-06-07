<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Krs extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('krs_model', 'm_krs');
        $this->load->library('form_validation');
    }

    private function form_validation_rules()
    {
        $this->form_validation->set_rules('nim', 'nim', 'required|trim|numeric');
        $this->form_validation->set_rules('jadwal_id', 'jadwal_id', 'required|trim');
        $this->form_validation->set_rules('semester', 'semester', 'required|trim');
    }

    public function index()
    {
        $data['page_title'] = 'KRS';
        $data['sidebar'] = 'akademik';

        $data['krs'] = $this->m_krs->get();
        $this->template_view->load('akademik/krs/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Tambah KRS';
        $data['sidebar'] = 'akademik';
        // melakukan validasi form
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            return $this->template_view->load('akademik/krs/create', $data);
        }
        // membuat data array untuk query ke db (harus urut sesuai db)
        $data = [
            'nim' => htmlspecialchars($this->input->post('nim', true)),
            'jadwal_id' => htmlspecialchars($this->input->post('jadwal_id', true)),
            'semester' => htmlspecialchars($this->input->post('semester', true)),
            'status_pa' => 'n',
        ];

        // menginputkan data registrasi
        if ($this->m_krs->insert($data)) {
            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menambahkan data</div>');
        }

        // redirect ke controller tahun_akademik
        return redirect('akademik/krs');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Status KRS';
        $data['sidebar'] = 'akademik';
        $data['krs'] = $this->m_krs->get($id);
        // validasi form
        // jika validasi gagal
        if (empty($this->input->post('status_pa', true))) {
            return $this->template_view->load('akademik/krs/edit', $data);
        }
        $data = [
            'status_pa' => htmlspecialchars($this->input->post('status_pa', true))
        ];

        // menginputkan data registrasi
        if ($this->m_krs->update($id, $data)) {
            // memberikan flashdata message kalau berhasil update
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil mengubah status</div>');
        } else {
            // memberikan flashdata message kalau gagal update
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            gagal mengubah status</div>');
        }
        // redirect ke controller tahun_akademik
        return redirect('akademik/krs');
    }

    public function delete($id)
    {
        if ($this->m_krs->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus KRS</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus KRS</div>');
        }
        redirect('akademik/krs');
    }
}
