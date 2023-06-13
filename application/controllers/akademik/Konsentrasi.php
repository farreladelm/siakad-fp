<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsentrasi extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('konsentrasi_model', 'm_konsentrasi');
        $this->load->model('prodi_model');
        $this->load->library('form_validation');
    }

    private function form_validation_rules()
    {
        $this->form_validation->set_rules('nama_konsentrasi', 'nama_konsentrasi', 'required|trim|is_unique[akademik_konsentrasi.nama_konsentrasi]');
        $this->form_validation->set_rules('ketua', 'ketua', 'required|trim');
        $this->form_validation->set_rules('jenjang', 'jenjang', 'required|trim');
        $this->form_validation->set_rules('jml_semester', 'jml_semester', 'required|trim');
        $this->form_validation->set_rules('prodi_id', 'prodi_id', 'required|trim');
    }

    public function index()
    {
        $data['page_title'] = 'Konsentrasi';
        $data['sidebar'] = 'akademik';
        $data['prodi'] = $this->prodi_model->get_name();


        $data['konsentrasi'] = $this->m_konsentrasi->get();
        $this->template_view->load('akademik/konsentrasi/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Tambah Data';
        $data['sidebar'] = 'akademik';
        $data['prodi'] = $this->prodi_model->get();
        // melakukan validasi form
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            return $this->template_view->load('akademik/konsentrasi/create', $data);
        }
        // membuat data array untuk query ke db (harus urut sesuai db)
        $data = [
            'nama_konsentrasi' => htmlspecialchars($this->input->post('nama_konsentrasi', true)),
            'ketua' => htmlspecialchars($this->input->post('ketua', true)),
            'jenjang' => htmlspecialchars($this->input->post('jenjang', true)),
            'jml_semester' => htmlspecialchars($this->input->post('jml_semester', true)),
            'gelar' => htmlspecialchars($this->input->post('jenjang', true)),
            'prodi_id' => htmlspecialchars($this->input->post('prodi_id', true)),
        ];

        // menginputkan data registrasi
        if ($this->m_konsentrasi->insert($data)) {
            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menambahkan data</div>');
        }

        // redirect ke controller tahun_akademik
        return redirect('akademik/konsentrasi');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Konsentrasi';
        $data['sidebar'] = 'akademik';
        $data['konsentrasi'] = $this->m_konsentrasi->get($id);
        $data['prodi'] = $this->prodi_model->get();

        // validasi form
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            return $this->template_view->load('akademik/konsentrasi/edit', $data);
        }

        $data = [
            'nama_konsentrasi' => htmlspecialchars($this->input->post('nama_konsentrasi', true)),
            'ketua' => htmlspecialchars($this->input->post('ketua', true)),
            'jenjang' => htmlspecialchars($this->input->post('jenjang', true)),
            'jml_semester' => htmlspecialchars($this->input->post('jml_semester', true)),
            'gelar' => htmlspecialchars($this->input->post('jenjang', true)),
            'prodi_id' => htmlspecialchars($this->input->post('prodi_id', true)),
        ];

        // menginputkan data registrasi
        if ($this->m_konsentrasi->update($id, $data)) {
            // memberikan flashdata message kalau berhasil update
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil mengubah data</div>');
        } else {
            // memberikan flashdata message kalau gagal update
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            gagal mengubah data</div>');
        }
        // redirect ke controller tahun_akademik
        return redirect('akademik/konsentrasi');
    }

    public function delete($id)
    {
        if ($this->m_konsentrasi->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus KRS</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus KRS</div>');
        }
        redirect('akademik/konsentrasi');
    }
}
