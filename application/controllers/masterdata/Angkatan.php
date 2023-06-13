<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Angkatan extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('angkatan_model', 'm_ang');
        $this->load->library('form_validation');
    }

    private function form_validation_rules()
    {
        $this->form_validation->set_rules('angkatan_id', 'angkatan_id', 'required|trim|numeric');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');
        $this->form_validation->set_rules('aktif', 'aktif', 'required|trim');
    }

    public function index()
    {
        $data['page_title'] = 'Angkatan';
        $data['sidebar'] = 'master data';

        $data['ang'] = $this->m_ang->get();
        $this->template_view->load('masterdata/angkatan/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Tambah Angkatan';
        $data['sidebar'] = 'masterdata';
        // melakukan validasi form
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            return $this->template_view->load('masterdata/angkatan/create', $data);
        }
        // membuat data array untuk query ke db (harus urut sesuai db)
        $data = [
            'angkatan_id' => htmlspecialchars($this->input->post('angkatan_id', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
            'aktif' => htmlspecialchars($this->input->post('aktif', true)),
        ];

        // menginputkan data registrasi
        if ($this->m_ang->insert($data)) {
            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menambahkan data</div>');
        }

        // redirect ke controller tahun_masterdata
        return redirect('masterdata/angkatan');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Status Angkatan';
        $data['sidebar'] = 'master data';
        $data['ang'] = $this->m_ang->get($id);
        // validasi form
        // jika validasi gagal
        if (empty($this->input->post('aktif', true))) {
            return $this->template_view->load('masterdata/angkatan/edit', $data);
        }
        $data = [
            'aktif' => htmlspecialchars($this->input->post('aktif', true))
        ];

        // menginputkan data registrasi
        if ($this->m_ang->update($id, $data)) {
            // memberikan flashdata message kalau berhasil update
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil mengubah status</div>');
        } else {
            // memberikan flashdata message kalau gagal update
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            gagal mengubah status</div>');
        }
        // redirect ke controller tahun_masterdata
        return redirect('masterdata/angkatan');
    }

    public function delete($id)
    {
        if ($this->m_ang->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus data</div>');
        }
        redirect('masterdata/angkatan');
    }

}
