<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Khs extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('khs_model', 'm_khs');
        $this->load->library('form_validation');
    }

    private function form_validation_rules()
    {
        $this->form_validation->set_rules('krs_id', 'krs_id', 'required|trim|numeric');
        $this->form_validation->set_rules('mutu', 'mutu', 'required|trim|numeric');
        $this->form_validation->set_rules('kehadiran', 'kehadiran', 'required|trim|numeric');
        $this->form_validation->set_rules('tugas', 'tugas', 'required|trim|numeric');
        $this->form_validation->set_rules('grade', 'grade', 'required|trim');
        $this->form_validation->set_rules('confirm', 'confirm', 'required|trim');
    }

    public function index()
    {
        $data['page_title'] = 'KHS';
        $data['sidebar'] = 'akademik';

        $data['khs'] = $this->m_khs->get();
        $this->template_view->load('akademik/khs/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Tambah KHS';
        $data['sidebar'] = 'akademik';
        // melakukan validasi form
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            return $this->template_view->load('akademik/khs/create', $data);
        }
        // membuat data array untuk query ke db (harus urut sesuai db)
        $data = [
            'krs_id' => htmlspecialchars($this->input->post('krs_id', true)),
            'mutu' => htmlspecialchars($this->input->post('mutu', true)),
            'kehadiran' => htmlspecialchars($this->input->post('kehadiran', true)),
            'tugas' => htmlspecialchars($this->input->post('tugas', true)),
            'grade' => htmlspecialchars($this->input->post('grade', true)),
            'confirm' => htmlspecialchars($this->input->post('confirm', true)),
        ];

        // menginputkan data registrasi
        if ($this->m_khs->insert($data)) {
            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menambahkan data</div>');
        }

        // redirect ke controller tahun_akademik
        return redirect('akademik/khs');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Status KHS';
        $data['sidebar'] = 'akademik';
        $data['khs'] = $this->m_khs->get($id);
        // validasi form
        $this->form_validation_rules();
        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            return $this->template_view->load('akademik/khs/edit', $data);
        }
        $data = [
            'krs_id' => htmlspecialchars($this->input->post('krs_id', true)),
            'mutu' => htmlspecialchars($this->input->post('mutu', true)),
            'kehadiran' => htmlspecialchars($this->input->post('kehadiran', true)),
            'tugas' => htmlspecialchars($this->input->post('tugas', true)),
            'grade' => htmlspecialchars($this->input->post('grade', true)),
            'confirm' => htmlspecialchars($this->input->post('confirm', true)),
        ];

        // menginputkan data registrasi
        if ($this->m_khs->update($id, $data)) {
            // memberikan flashdata message kalau berhasil update
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil mengubah status</div>');
        } else {
            // memberikan flashdata message kalau gagal update
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            gagal mengubah status</div>');
        }
        // redirect ke controller tahun_akademik
        return redirect('akademik/khs');
    }

    public function delete($id)
    {
        if ($this->m_khs->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus KHS</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus KHS</div>');
        }
        redirect('akademik/khs');
    }
}
