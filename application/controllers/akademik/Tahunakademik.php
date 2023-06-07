<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahunakademik extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tahunakademik_model', 't_akademik');
        $this->load->library('form_validation');
    }

    private function form_validation_rules()
    {
        $this->form_validation->set_rules('tahun', 'tahun', 'required|trim|numeric');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');
        $this->form_validation->set_rules('status', 'status', 'required|trim');
        $this->form_validation->set_rules('batas_registrasi', 'batas_registrasi', 'required|trim');
    }

    public function index()
    {
        $data['page_title'] = 'Tahun Akademik';
        $data['sidebar'] = 'akademik';

        $data['tahunakademik'] = $this->t_akademik->get();
        $this->template_view->load('akademik/tahunakademik/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Buat Tahun Akademik Baru';
        $data['sidebar'] = 'akademik';
        // melakukan validasi form
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            return $this->template_view->load('akademik/tahunakademik/create', $data);
        }
        // membuat data array untuk query ke db (harus urut sesuai db)
        $data = [
            'keterangan' => htmlspecialchars($this->input->post('tahun', true) . $this->input->post('keterangan', true)),
            'batas_registrasi' => htmlspecialchars($this->input->post('batas_registrasi', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
            'tahun' => htmlspecialchars($this->input->post('tahun', true)),
        ];

        // menginputkan data registrasi
        if ($this->t_akademik->insert($data)) {
            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan Tahun Akademik baru</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menambahkan Tahun Akademik baru</div>');
        }

        // redirect ke controller tahun_akademik
        return redirect('akademik/tahunakademik');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Tahun';
        $data['sidebar'] = 'akademik';
        $data['tahun_akademik'] = $this->t_akademik->get($id);
        // validasi form
        // apply unique rules ketika input kode t_akademik tidak sesuai dengan nilai pada db
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            return $this->template_view->load('akademik/tahunakademik/edit', $data);
        }
        $data = [
            'keterangan' => htmlspecialchars($this->input->post('tahun', true) . $this->input->post('keterangan', true)),
            'batas_registrasi' => htmlspecialchars($this->input->post('batas_registrasi', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
            'tahun' => htmlspecialchars($this->input->post('tahun', true)),
        ];

        // menginputkan data registrasi
        if ($this->t_akademik->update($id, $data)) {
            // memberikan flashdata message kalau berhasil update
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan pengguna baru</div>');
        } else {
            // memberikan flashdata message kalau gagal update
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Berhasil menambahkan pengguna baru</div>');
        }
        // redirect ke controller tahun_akademik
        return redirect('akademik/tahunakademik');
    }

    public function delete($id)
    {
        if ($this->t_akademik->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus Tahun Akademik</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus Tahun Akademik</div>');
        }
        redirect('akademik/tahunakademik');
    }
}
