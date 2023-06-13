<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwalkuliah extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jadwalkuliah_model', 'm_jadwal');
        $this->load->model('matakuliah_model', 'm_makul');
        $this->load->model('tahunakademik_model', 'm_takademik');
        $this->load->model('konsentrasi_model', 'm_konsentrasi');
        $this->load->library('form_validation');

        $this->load->helper('basic_helper');
    }

    private function form_validation_rules()
    {
        $this->form_validation->set_rules('tahun_akademik_id', 'tahun_akademik_id', 'required|trim');
        $this->form_validation->set_rules('konsentrasi_id', 'konsentrasi_id', 'required|trim');
        $this->form_validation->set_rules('makul_id', 'makul_id', 'required|trim');
        $this->form_validation->set_rules('hari_id', 'hari_id', 'required|trim');
        $this->form_validation->set_rules('ruangan_id', 'ruangan_id', 'required|trim');
        $this->form_validation->set_rules('dosen_id', 'dosen_id', 'required|trim');
        $this->form_validation->set_rules('semester', 'semester', 'required|trim');
        $this->form_validation->set_rules('jam_mulai', 'jam_mulai', 'required|trim');
        $this->form_validation->set_rules('jam_selesai', 'jam_selesai', 'required|trim');
    }

    public function index()
    {
        $data['page_title'] = 'Jadwal Kuliah';
        $data['sidebar'] = 'akademik';

        $data['jadwal'] = days_str($this->m_jadwal->get(), 'hari_id');
        $data['makul'] = $this->m_makul->get_name();
        $data['tahun_akademik'] = $this->m_takademik->get_name();
        $data['konsentrasi'] = $this->m_konsentrasi->get_name();

        $this->template_view->load('akademik/jadwalkuliah/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Tambah Data';
        $data['sidebar'] = 'akademik';
        $data['makul'] = $this->m_makul->get();
        $data['tahun_akademik'] = $this->m_takademik->get();
        // melakukan validasi form
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            return $this->template_view->load('akademik/jadwalkuliah/create', $data);
        }
        $makul = htmlspecialchars($this->m_makul->get($this->input->post('makul_id', true)));
        $konsentrasi = htmlspecialchars($this->konsentrasi_model->get($makul['konsentrasi_id']));
        // membuat data array untuk query ke db (harus urut sesuai db)
        $insert_data = [
            'tahun_akademik_id' => htmlspecialchars($this->input->post('tahun_akademik_id', true)),
            'konsentrasi_id' => $konsentrasi,
            'makul_id' => $makul,
            'hari_id' => htmlspecialchars($this->input->post('hari_id', true)),
            'waktu_id' => 0,
            'ruangan_id' => htmlspecialchars($this->input->post('ruangan_id', true)),
            'dosen_id' => htmlspecialchars($this->input->post('dosen_id', true)),
            'semester' => htmlspecialchars($this->input->post('semester', true)),
            'jam_mulai' => htmlspecialchars($this->input->post('jam_mulai', true)),
            'jam_selesai' => htmlspecialchars($this->input->post('jam_selesai', true)),
        ];

        print_r($insert_data);

        // menginputkan data registrasi
        if ($this->m_jadwal->insert($insert_data)) {
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
        $data['krs'] = $this->m_jadwal->get($id);
        $data['makul'] = $this->m_makul->get();
        $data['tahun_akademik'] = $this->m_takademik->get();
        $data['konsentrasi'] = $this->m_konsentrasi->get();
        // validasi form
        // jika validasi gagal
        if (empty($this->input->post('status_pa', true))) {
            return $this->template_view->load('akademik/jadwalkuliah/edit', $data);
        }
        $data = [
            'status_pa' => htmlspecialchars($this->input->post('status_pa', true))
        ];

        // menginputkan data registrasi
        if ($this->m_jadwal->update($id, $data)) {
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
        if ($this->m_jadwal->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus KRS</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus KRS</div>');
        }
        redirect('akademik/jadwalkuliah');
    }
}
