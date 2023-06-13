<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwalkuliah extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jadwalkuliah_model');
        $this->load->model('matakuliah_model');
        $this->load->model('tahunakademik_model');
        $this->load->model('konsentrasi_model');
        $this->load->model('prodi_model');
        $this->load->model('dosen_model');
        $this->load->model('ruangan_model');
        $this->load->library('form_validation');

        $this->load->helper('basic_helper');
    }

    private function form_validation_rules()
    {
        $this->form_validation->set_rules('tahun_akademik_id', 'tahun_akademik_id', 'required|trim');
        $this->form_validation->set_rules('makul_id', 'makul_id', 'required|trim');
        $this->form_validation->set_rules('hari_id', 'hari_id', 'required|trim');
        $this->form_validation->set_rules('ruangan_id', 'ruangan_id', 'required|trim');
        $this->form_validation->set_rules('dosen_id', 'dosen_id', 'required|trim');
        $this->form_validation->set_rules('semester', 'semester', 'required|trim');
        $this->form_validation->set_rules('jam_mulai', 'jam_mulai', 'trim');
        $this->form_validation->set_rules('jam_selesai', 'jam_selesai', 'trim');
    }

    public function index()
    {
        $data['page_title'] = 'Jadwal Kuliah';
        $data['sidebar'] = 'akademik';

        $data['jadwal'] = days_str($this->jadwalkuliah_model->get(), 'hari_id');
        $data['makul'] = $this->matakuliah_model->get_name();
        $data['tahun_akademik'] = $this->tahunakademik_model->get_name();
        $data['konsentrasi'] = $this->konsentrasi_model->get_name();
        $data['dosen'] = $this->dosen_model->get_name();
        $data['ruangan'] = $this->ruangan_model->get_name();

        $this->template_view->load('akademik/jadwalkuliah/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Tambah Data';
        $data['sidebar'] = 'akademik';
        $data['makul'] = $this->matakuliah_model->get();
        $data['tahun_akademik'] = $this->tahunakademik_model->get();
        $data['prodi'] = $this->prodi_model->get_name();
        $data['dosen'] = $this->dosen_model->get();
        $data['ruangan'] = $this->ruangan_model->get();
        // melakukan validasi form
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            return $this->template_view->load('akademik/jadwalkuliah/create', $data);
        }


        $makul = $this->matakuliah_model->get($this->input->post('makul_id', true));
        $konsentrasi = $this->konsentrasi_model->get($makul['konsentrasi_id']);
        // membuat data array untuk query ke db (harus urut sesuai db)
        $insert_data = [
            'tahun_akademik_id' => htmlspecialchars($this->input->post('tahun_akademik_id', true)),
            'konsentrasi_id' => $konsentrasi['konsentrasi_id'],
            'makul_id' => $makul['makul_id'],
            'hari_id' => htmlspecialchars($this->input->post('hari_id', true)),
            'waktu_id' => 0,
            'ruangan_id' => htmlspecialchars($this->input->post('ruangan_id', true)),
            'dosen_id' => htmlspecialchars($this->input->post('dosen_id', true)),
            'semester' => htmlspecialchars($this->input->post('semester', true)),
            'jam_mulai' => htmlspecialchars($this->input->post('jam_mulai', true)),
            'jam_selesai' => htmlspecialchars($this->input->post('jam_selesai', true)),
        ];

        // menginputkan data registrasi
        if ($this->jadwalkuliah_model->insert($insert_data)) {
            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menambahkan data</div>');
        }

        // redirect ke controller tahun_akademik
        return redirect('akademik/jadwalkuliah');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Data';
        $data['sidebar'] = 'akademik';
        $data['jadwal'] = $this->jadwalkuliah_model->get($id);
        $data['makul'] = $this->matakuliah_model->get();
        $data['tahun_akademik'] = $this->tahunakademik_model->get();
        $data['prodi'] = $this->prodi_model->get_name();
        $data['dosen'] = $this->dosen_model->get();
        $data['ruangan'] = $this->ruangan_model->get();
        // validasi form
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            return $this->template_view->load('akademik/jadwalkuliah/edit', $data);
        }
        $makul = $this->matakuliah_model->get($this->input->post('makul_id', true));
        $konsentrasi = $this->konsentrasi_model->get($makul['konsentrasi_id']);
        // membuat data array untuk query ke db (harus urut sesuai db)
        $insert_data = [
            'tahun_akademik_id' => htmlspecialchars($this->input->post('tahun_akademik_id', true)),
            'konsentrasi_id' => $konsentrasi['konsentrasi_id'],
            'makul_id' => $makul['makul_id'],
            'hari_id' => htmlspecialchars($this->input->post('hari_id', true)),
            'waktu_id' => 0,
            'ruangan_id' => htmlspecialchars($this->input->post('ruangan_id', true)),
            'dosen_id' => htmlspecialchars($this->input->post('dosen_id', true)),
            'semester' => htmlspecialchars($this->input->post('semester', true)),
            'jam_mulai' => htmlspecialchars($this->input->post('jam_mulai', true)),
            'jam_selesai' => htmlspecialchars($this->input->post('jam_selesai', true)),
        ];

        // menginputkan data registrasi
        if ($this->jadwalkuliah_model->update($id, $insert_data)) {
            // memberikan flashdata message kalau berhasil update
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil mengubah status</div>');
        } else {
            // memberikan flashdata message kalau gagal update
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            gagal mengubah status</div>');
        }
        // redirect ke controller tahun_akademik
        return redirect('akademik/jadwalkuliah');
    }

    public function delete($id)
    {
        if ($this->jadwalkuliah_model->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus KRS</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus KRS</div>');
        }
        redirect('akademik/jadwalkuliah');
    }
}
