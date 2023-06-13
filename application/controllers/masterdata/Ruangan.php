<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ruangan extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ruangan_model', 'm_rua');
        $this->load->library('form_validation');
    }

    private function form_validation_rules()
    {
        $this->form_validation->set_rules('nama_ruangan', 'nama_ruangan', 'required|trim');
        $this->form_validation->set_rules('gedung_id', 'gedung_id', 'required|trim|numeric');
        $this->form_validation->set_rules('kapasitas', 'kapasitas', 'required|trim|numeric');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');
    }

    public function index()
    {
        $data['page_title'] = 'Ruangan';
        $data['sidebar'] = 'master data';

        $data['rua'] = $this->m_rua->get();
        $this->template_view->load('masterdata/ruangan/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Tambah Ruangan';
        $data['sidebar'] = 'master data';
        // melakukan validasi form
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            return $this->template_view->load('masterdata/ruangan/create', $data);
        }
        // membuat data array untuk query ke db (harus urut sesuai db)
        $data = [
            'ruangan_id' => htmlspecialchars($this->input->post('ruangan_id', true)),
            'nama_ruangan' => htmlspecialchars($this->input->post('nama_ruangan', true)),
            'gedung_id' => htmlspecialchars($this->input->post('gedung_id', true)),
            'kapasitas' => htmlspecialchars($this->input->post('kapasitas', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
        ];

        // menginputkan data registrasi
        if ($this->m_rua->insert($data)) {
            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menambahkan data</div>');
        }

        // redirect ke controller tahun_masterdata
        return redirect('masterdata/ruangan');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Ruangan';
        $data['sidebar'] = 'master data';
        $data['rua'] = $this->m_rua->get($id);

        // validasi form
        // apply unique rules ketika input kode m_rua tidak sesuai dengan nilai pada db
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            return $this->template_view->load('masterdata/ruangan/edit', $data);
        }
        $data = [
            'ruangan_id' => htmlspecialchars($this->input->post('ruangan_id', true)),
            'nama_ruangan' => htmlspecialchars($this->input->post('nama_ruangan', true)),
            'gedung_id' => htmlspecialchars($this->input->post('gedung_id', true)),
            'kapasitas' => htmlspecialchars($this->input->post('kapasitas', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
        ];

        // menginputkan data registrasi
        if ($this->m_rua->update($id, $data)) {
            // memberikan flashdata message kalau berhasil update
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan pengguna baru</div>');
        } else {
            // memberikan flashdata message kalau gagal update
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Berhasil menambahkan pengguna baru</div>');
        }
        // redirect ke controller tahun_akademik
        return redirect('masterdata/ruangan');
    }

    public function delete($id)
    {
        if ($this->m_rua->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus data</div>');
        }
        redirect('masterdata/ruangan');
    }
}
