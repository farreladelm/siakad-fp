<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('prodi_model');
        $this->load->library('form_validation');
    }

    private function form_validation_rules($new = true)
    {
        $is_unique = $new ? '|is_unique[akademik_prodi.nama_prodi]' : '';
        $this->form_validation->set_rules('nama_prodi', 'nama_prodi', 'required|trim' . $is_unique);
        $this->form_validation->set_rules('ketua', 'ketua', 'required|trim');
        $this->form_validation->set_rules('no_izin', 'no_izin', 'required|trim');
        $this->form_validation->set_rules('status', 'status', 'required|trim');
    }

    public function index()
    {
        $data['page_title'] = 'Program Didik';
        $data['sidebar'] = 'akademik';

        $data['prodi'] = $this->prodi_model->get();
        $this->template_view->load('akademik/prodi/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Tambah Data';
        $data['sidebar'] = 'akademik';
        // melakukan validasi form
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            return $this->template_view->load('akademik/prodi/create', $data);
        }
        // membuat data array untuk query ke db (harus urut sesuai db)
        $data = [
            'nama_prodi' => htmlspecialchars($this->input->post('nama_prodi', true)),
            'ketua' => htmlspecialchars($this->input->post('ketua', true)),
            'no_izin' => htmlspecialchars($this->input->post('no_izin', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
        ];

        // menginputkan data registrasi
        if ($this->prodi_model->insert($data)) {
            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menambahkan data</div>');
        }

        // redirect ke controller tahun_akademik
        return redirect('akademik/prodi');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Data';
        $data['sidebar'] = 'akademik';
        $data['prodi'] = $this->prodi_model->get($id);
        // validasi form
        $is_unique = $data['prodi']['nama_prodi'] != $this->input->post('nama_prodi', true);
        $this->form_validation_rules($is_unique);

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            return $this->template_view->load('akademik/prodi/edit', $data);
        }

        $data = [
            'nama_prodi' => htmlspecialchars($this->input->post('nama_prodi', true)),
            'ketua' => htmlspecialchars($this->input->post('ketua', true)),
            'no_izin' => htmlspecialchars($this->input->post('no_izin', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
        ];

        // menginputkan data registrasi
        if ($this->prodi_model->update($id, $data)) {
            // memberikan flashdata message kalau berhasil update
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil mengubah data</div>');
        } else {
            // memberikan flashdata message kalau gagal update
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            gagal mengubah data</div>');
        }
        // redirect ke controller tahun_akademik
        return redirect('akademik/prodi');
    }

    public function delete($id)
    {
        if ($this->prodi_model->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus KRS</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus KRS</div>');
        }
        redirect('akademik/prodi');
    }
}
