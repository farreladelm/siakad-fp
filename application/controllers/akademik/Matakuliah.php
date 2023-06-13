<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('matakuliah_model', 'makul');
        $this->load->library('form_validation');
    }

    private function form_validation_rules($unique_kode = true, $unique_nama = true)
    {
        $unique_kode = $unique_kode ? '|is_unique[makul_matakuliah.kode_makul]' : '';
        $unique_nama = $unique_nama ? '|is_unique[makul_matakuliah.nama_makul]' : '';
        $this->form_validation->set_rules('kode_makul', 'Kode Makul', 'required|trim' . $unique_kode);
        $this->form_validation->set_rules('nama_makul', 'Nama Makul', 'required|trim' . $unique_nama);
        $this->form_validation->set_rules('sks', 'SKS', 'required|trim');
        $this->form_validation->set_rules('semester', 'semester', 'required|trim');
        $this->form_validation->set_rules('konsentrasi_id', 'konsentrasi_id', 'required|trim');
    }

    public function index()
    {
        $data['page_title'] = 'Mata Kuliah';
        $data['sidebar'] = 'akademik';

        $data['subjects'] = $this->makul->get();
        $this->template_view->load('akademik/matakuliah/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Tambah Data';
        $data['sidebar'] = 'akademik';
        // melakukan validasi form
        $this->form_validation_rules(true, true);

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            return $this->template_view->load('akademik/matakuliah/create', $data);
        }
        // membuat data array untuk query ke db (harus urut sesuai db)
        $data = [
            'kode_makul' => htmlspecialchars($this->input->post('kode_makul', true)),
            'nama_makul' => htmlspecialchars($this->input->post('nama_makul', true)),
            'sks' => htmlspecialchars($this->input->post('sks', true)),
            'semester' => htmlspecialchars($this->input->post('semester', true)),
            'konsentrasi_id' => htmlspecialchars($this->input->post('konsentrasi_id', true)),
            'aktif' => 'y',
            'jam' => htmlspecialchars($this->input->post('sks', true)),
        ];

        // menginputkan data registrasi
        if ($this->makul->insert($data)) {
            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan Mata Kuliah baru</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menambahkan Mata Kuliah baru</div>');
        }

        // redirect ke controller subject
        return redirect('akademik/matakuliah');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Data';
        $data['sidebar'] = 'akademik';
        $subject = $this->makul->get($id);
        $data['subject'] = $subject;
        // validasi form
        // apply unique rules ketika input kode makul tidak sesuai dengan nilai pada db
        $kode = ($this->input->post('kode_makul') != $subject['kode_makul']);
        $nama = ($this->input->post('nama_makul') != $subject['nama_makul']);
        $this->form_validation_rules($kode, $nama);

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // print_r($this->form_validation->run());
            return $this->template_view->load('akademik/matakuliah/edit', $data);
        }
        $data = [
            'kode_makul' => htmlspecialchars($this->input->post('kode_makul', true)),
            'nama_makul' => htmlspecialchars($this->input->post('nama_makul', true)),
            'sks' => htmlspecialchars($this->input->post('sks', true)),
            'semester' => htmlspecialchars($this->input->post('semester', true)),
            'konsentrasi_id' => htmlspecialchars($this->input->post('konsentrasi_id', true)),
            'aktif' => htmlspecialchars($this->input->post('aktif', true)),
            'jam' => htmlspecialchars($this->input->post('sks', true)),
        ];

        // menginputkan data registrasi
        if ($this->makul->update($id, $data)) {
            // memberikan flashdata message kalau berhasil update
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan pengguna baru</div>');
        } else {
            // memberikan flashdata message kalau gagal update
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Berhasil menambahkan pengguna baru</div>');
        }
        // redirect ke controller subject
        return redirect('akademik/matakuliah');
    }

    public function delete($id)
    {
        if ($this->makul->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus Mata Kuliah</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus Mata Kuliah</div>');
        }
        redirect('akademik/matakuliah');
    }
}
