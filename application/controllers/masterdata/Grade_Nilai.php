<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grade_Nilai extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('grade_nilai_model', 'm_grn');
        $this->load->library('form_validation');
    }

    private function form_validation_rules()
    {
        $this->form_validation->set_rules('dari', 'dari', 'required|trim|numeric');
        $this->form_validation->set_rules('sampai', 'sampai', 'required|trim|numeric');
        $this->form_validation->set_rules('grade', 'grade', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');
    }

    public function index()
    {
        $data['page_title'] = 'Grade Nilai';
        $data['sidebar'] = 'master data';

        $data['grn'] = $this->m_grn->get();
        $this->template_view->load('masterdata/grade_nilai/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Tambah Grade Nilai';
        $data['sidebar'] = 'master data';
        // melakukan validasi form
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            return $this->template_view->load('masterdata/grade_nilai/create', $data);
        }
        // membuat data array untuk query ke db (harus urut sesuai db)
        $data = [
            'nilai_id' => htmlspecialchars($this->input->post('nilai_id', true)),
            'dari' => htmlspecialchars($this->input->post('dari', true)),
            'sampai' => htmlspecialchars($this->input->post('sampai', true)),
            'grade' => htmlspecialchars($this->input->post('grade', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
        ];

        // menginputkan data registrasi
        if ($this->m_grn->insert($data)) {
            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menambahkan data</div>');
        }

        // redirect ke controller tahun_masterdata
        return redirect('masterdata/grade_nilai');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Grade Nilai';
        $data['sidebar'] = 'master data';
        $data['grn'] = $this->m_grn->get($id);
        // validasi form
        // apply unique rules ketika input kode m_grn tidak sesuai dengan nilai pada db
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            return $this->template_view->load('masterdata/grade_nilai/edit', $data);
        }
        $data = [
            'nilai_id' => htmlspecialchars($this->input->post('nilai_id', true)),
            'dari' => htmlspecialchars($this->input->post('dari', true)),
            'sampai' => htmlspecialchars($this->input->post('sampai', true)),
            'grade' => htmlspecialchars($this->input->post('grade', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
        ];

        // menginputkan data registrasi
        if ($this->m_grn->update($id, $data)) {
            // memberikan flashdata message kalau berhasil update
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan pengguna baru</div>');
        } else {
            // memberikan flashdata message kalau gagal update
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Berhasil menambahkan pengguna baru</div>');
        }
        // redirect ke controller tahun_akademik
        return redirect('masterdata/grade_nilai');
    }

    public function delete($id)
    {
        if ($this->m_grn->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus data</div>');
        }
        redirect('masterdata/grade_nilai');
    }
}
