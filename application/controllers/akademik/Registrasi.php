<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('registrasi_model');
        $this->load->model('tahunakademik_model');
        $this->load->library('form_validation');
    }

    private function form_validation_rules()
    {
        $this->form_validation->set_rules('nim', 'nim', 'required|trim|numeric');
        $this->form_validation->set_rules('tahun_akademik_id', 'tahun_akademik_id', 'required|trim|numeric');
        $this->form_validation->set_rules('semester', 'semester', 'required|trim|numeric');
    }

    public function index()
    {
        $data['page_title'] = 'Registrasi';
        $data['sidebar'] = 'akademik';

        $data['registrasi'] = $this->registrasi_model->get();
        $data['tahun_akademik'] = $this->tahunakademik_model->get_name();
        $this->template_view->load('akademik/registrasi/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Tambah Data Registrasi';
        $data['sidebar'] = 'akademik';
        // melakukan validasi form
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            $data['tahun_akademik'] = $this->tahunakademik_model->get();
            return $this->template_view->load('akademik/registrasi/create', $data);
        }
        // membuat data array untuk query ke db (harus urut sesuai db)
        $data = [
            'nim' => htmlspecialchars($this->input->post('nim', true)),
            // 'tanggal_registrasi' => now(),
            'tahun_akademik_id' => htmlspecialchars($this->input->post('tahun_akademik_id', true)),
            'semester' => htmlspecialchars($this->input->post('semester', true)),
        ];

        // menginputkan data registrasi
        if ($this->registrasi_model->insert($data)) {
            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menambahkan data</div>');
        }

        // redirect ke controller tahun_akademik
        return redirect('akademik/registrasi');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Data';
        $data['sidebar'] = 'akademik';
        $data['registrasi'] = $this->registrasi_model->get($id);
        $data['tahun_akademik'] = $this->tahunakademik_model->get();

        // validasi form
        $this->form_validation_rules();
        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            return $this->template_view->load('akademik/registrasi/edit', $data);
        }
        $data = [
            'nim' => htmlspecialchars($this->input->post('nim', true)),
            'tahun_akademik_id' => htmlspecialchars($this->input->post('tahun_akademik_id', true)),
            'semester' => htmlspecialchars($this->input->post('semester', true)),
        ];

        // menginputkan data registrasi
        if ($this->registrasi_model->update($id, $data)) {
            // memberikan flashdata message kalau berhasil update
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil mengubah status</div>');
        } else {
            // memberikan flashdata message kalau gagal update
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            gagal mengubah status</div>');
        }
        // redirect ke controller tahun_akademik
        return redirect('akademik/registrasi');
    }

    public function delete($id)
    {
        if ($this->registrasi_model->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus KHS</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus KHS</div>');
        }
        redirect('akademik/registrasi');
    }
}
