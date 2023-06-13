<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dosen_model', 'm_dos');
        $this->load->model('prodi_model');
        $this->load->library('form_validation');
    }

    private function form_validation_rules()
    {
        $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required|trim');
        $this->form_validation->set_rules('nidn', 'nidn', 'required|trim');
        $this->form_validation->set_rules('nip', 'nip', 'required|trim');
        $this->form_validation->set_rules('no_ktp', 'no_ktp', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required|trim');
        $this->form_validation->set_rules('gender', 'gender', 'required|trim|numeric');
        $this->form_validation->set_rules('agama', 'agama', 'required|trim');
        $this->form_validation->set_rules('status_kawin', 'status_kawin', 'required|trim|numeric');
        $this->form_validation->set_rules('gelar_pendidikan', 'gelar_pendidikan', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('hp', 'hp', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim');
        $this->form_validation->set_rules('prodi_id', 'prodi_id', 'required|trim|numeric');
    }

    public function index()
    {
        $data['page_title'] = 'Dosen';
        $data['sidebar'] = 'master data';
        $data['prodi'] = $this->prodi_model->get_name();

        $data['dos'] = $this->m_dos->get();
        $this->template_view->load('masterdata/dosen/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Tambah Dosen';
        $data['sidebar'] = 'master data';
        $data['prodi'] = $this->prodi_model->get();

        // melakukan validasi form
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            return $this->template_view->load('masterdata/dosen/create', $data);
        }
        // membuat data array untuk query ke db (harus urut sesuai db)
        $data = [
            'dosen_id' => htmlspecialchars($this->input->post('dosen_id', true)),
            'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
            'nidn' => htmlspecialchars($this->input->post('nidn', true)),
            'nip' => htmlspecialchars($this->input->post('nip', true)),
            'no_ktp' => htmlspecialchars($this->input->post('no_ktp', true)),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
            'gender' => htmlspecialchars($this->input->post('gender', true)),
            'agama' => htmlspecialchars($this->input->post('agama', true)),
            'status_kawin' => htmlspecialchars($this->input->post('status_kawin', true)),
            'gelar_pendidikan' => htmlspecialchars($this->input->post('gelar_pendidikan', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'hp' => htmlspecialchars($this->input->post('hp', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'prodi_id' => htmlspecialchars($this->input->post('prodi_id', true)),
        ];

        // menginputkan data registrasi
        if ($this->m_dos->insert($data)) {
            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menambahkan data</div>');
        }

        // redirect ke controller tahun_masterdata
        return redirect('masterdata/dosen');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Dosen';
        $data['sidebar'] = 'master data';
        $data['dos'] = $this->m_dos->get($id);
        $data['prodi'] = $this->prodi_model->get();

        // validasi form
        // apply unique rules ketika input kode m_dos tidak sesuai dengan nilai pada db
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            return $this->template_view->load('masterdata/dosen/edit', $data);
        }
        $data = [
            'dosen_id' => htmlspecialchars($this->input->post('dosen_id', true)),
            'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
            'nidn' => htmlspecialchars($this->input->post('nidn', true)),
            'nip' => htmlspecialchars($this->input->post('nip', true)),
            'no_ktp' => htmlspecialchars($this->input->post('no_ktp', true)),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
            'gender' => htmlspecialchars($this->input->post('gender', true)),
            'agama' => htmlspecialchars($this->input->post('agama', true)),
            'status_kawin' => htmlspecialchars($this->input->post('status_kawin', true)),
            'gelar_pendidikan' => htmlspecialchars($this->input->post('gelar_pendidikan', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'hp' => htmlspecialchars($this->input->post('hp', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'prodi_id' => htmlspecialchars($this->input->post('prodi_id', true)),
        ];

        // menginputkan data registrasi
        if ($this->m_dos->update($id, $data)) {
            // memberikan flashdata message kalau berhasil update
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan pengguna baru</div>');
        } else {
            // memberikan flashdata message kalau gagal update
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Berhasil menambahkan pengguna baru</div>');
        }
        // redirect ke controller tahun_akademik
        return redirect('masterdata/dosen');
    }

    public function delete($id)
    {
        if ($this->m_dos->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus data</div>');
        }
        redirect('masterdata/dosen');
    }
}
