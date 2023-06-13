<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends Auth_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model', 'm_mhs');
        $this->load->library('form_validation');
    }

    private function form_validation_rules()
    {
        $this->form_validation->set_rules('mahasiswa_id', 'mahasiswa_id', 'required|trim|numeric');
        $this->form_validation->set_rules('nim', 'nim', 'required|trim');
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('konsentrasi_id', 'konsentrasi_id', 'required|trim|numeric');
        $this->form_validation->set_rules('angkatan', 'angkatan', 'required|trim|numeric');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('semester', 'semester', 'required|trim|numeric');
        $this->form_validation->set_rules('gender', 'gender', 'required|trim');
        $this->form_validation->set_rules('agama', 'agama', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required|trim');
        $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'required|trim');
        $this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'required|trim');
        $this->form_validation->set_rules('no_hp_ortu', 'no_hp_ortu', 'required|trim');
        $this->form_validation->set_rules('pekerjaan_ibu', 'pekerjaan_ibu', 'required|trim');
        $this->form_validation->set_rules('pekerjaan_ayah', 'pekerjaan_ayah', 'required|trim');
        $this->form_validation->set_rules('alamat_ayah', 'alamat_ayah', 'required|trim');
        $this->form_validation->set_rules('alamat_ibu', 'alamat_ibu', 'required|trim');
        $this->form_validation->set_rules('penghasilan_ayah', 'penghasilan_ayah', 'required|trim|numeric');
        $this->form_validation->set_rules('penghasilan_ibu', 'penghasilan_ibu', 'required|trim|numeric');
        $this->form_validation->set_rules('sekolah_nama', 'sekolah_nama', 'required|trim');
        $this->form_validation->set_rules('sekolah_telpon', 'sekolah_telpon', 'required|trim');
        $this->form_validation->set_rules('sekolah_alamat', 'sekolah_alamat', 'required|trim');
        $this->form_validation->set_rules('sekolah_jurusan', 'sekolah_jurusan', 'required|trim');
        $this->form_validation->set_rules('sekolah_tahun_lulus', 'sekolah_tahun_lulus', 'required|trim|numeric');
        $this->form_validation->set_rules('kampus_nama', 'kampus_nama', 'required|trim');
        $this->form_validation->set_rules('kampus_telpon', 'kampus_telpon', 'required|trim');
        $this->form_validation->set_rules('kampus_alamat', 'kampus_alamat', 'required|trim');
        $this->form_validation->set_rules('kampus_jurusan', 'kampus_jurusan', 'required|trim');
        $this->form_validation->set_rules('kampus_tahun_lulus', 'kampus_tahun_lulus', 'required|trim|numeric');
        $this->form_validation->set_rules('institusi_nama', 'institusi_nama', 'required|trim');
        $this->form_validation->set_rules('institusi_telpon', 'institusi_telpon', 'required|trim');
        $this->form_validation->set_rules('institusi_alamat', 'institusi_alamat', 'required|trim');
        $this->form_validation->set_rules('instansi_nama', 'instansi_nama', 'required|trim');
        $this->form_validation->set_rules('instansi_telpon', 'instansi_telpon', 'required|trim');
        $this->form_validation->set_rules('instansi_alamat', 'instansi_alamat', 'required|trim');
        $this->form_validation->set_rules('instansi_mulai', 'instansi_mulai', 'required|trim|numeric');
        $this->form_validation->set_rules('instansi_sampai', 'instansi_sampai', 'required|trim|numeric');
        $this->form_validation->set_rules('semester_aktif', 'semester_aktif', 'required|trim|numeric');
        $this->form_validation->set_rules('password', 'password', 'required|trim');

    }

    public function index()
    {
        $data['page_title'] = 'Mahasiswa';
        $data['sidebar'] = 'mahasiswa';

        $data['mhs'] = $this->m_mhs->get();
        $this->template_view->load('mahasiswa/index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Tambah Mahasiswa';
        $data['sidebar'] = 'mahasiswa';
        // melakukan validasi form
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            // $data['title'] = 'Page | Registration';
            return $this->template_view->load('mahasiswa/create', $data);
        }
        // membuat data array untuk query ke db (harus urut sesuai db)
        $data = [
            'mahasiswa_id' => htmlspecialchars($this->input->post('mahasiswa_id', true)),
            'nim' => htmlspecialchars($this->input->post('nim', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'konsentrasi_id' => htmlspecialchars($this->input->post('konsentrasi_id', true)),
            'angkatan' => htmlspecialchars($this->input->post('angkatan', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'semester' => htmlspecialchars($this->input->post('semester', true)),
            'gender' => htmlspecialchars($this->input->post('gender', true)),
            'agama' => htmlspecialchars($this->input->post('agama', true)),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
            'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu', true)),
            'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah', true)),
            'no_hp_ortu' => htmlspecialchars($this->input->post('no_hp_ortu', true)),
            'pekerjaan_ibu' => htmlspecialchars($this->input->post('pekerjaan_ibu', true)),
            'pekerjaan_ayah' => htmlspecialchars($this->input->post('pekerjaan_ayah', true)),
            'alamat_ayah' => htmlspecialchars($this->input->post('alamat_ayah', true)),
            'alamat_ibu' => htmlspecialchars($this->input->post('alamat_ibu', true)),
            'penghasilan_ayah' => htmlspecialchars($this->input->post('penghasilan_ayah', true)),
            'penghasilan_ibu' => htmlspecialchars($this->input->post('penghasilan_ibu', true)),
            'sekolah_nama' => htmlspecialchars($this->input->post('sekolah_nama', true)),
            'sekolah_telpon' => htmlspecialchars($this->input->post('sekolah_telpon', true)),
            'sekolah_alamat' => htmlspecialchars($this->input->post('sekolah_alamat', true)),
            'sekolah_jurusan' => htmlspecialchars($this->input->post('sekolah_jurusan', true)),
            'sekolah_tahun_lulus' => htmlspecialchars($this->input->post('sekolah_tahun_lulus', true)),
            'kampus_nama' => htmlspecialchars($this->input->post('kampus_nama', true)),
            'kampus_telpon' => htmlspecialchars($this->input->post('kampus_telpon', true)),
            'kampus_alamat' => htmlspecialchars($this->input->post('kampus_alamat', true)),
            'kampus_jurusan' => htmlspecialchars($this->input->post('kampus_jurusan', true)),
            'kampus_tahun_lulus' => htmlspecialchars($this->input->post('kampus_tahun_lulus', true)),
            'institusi_nama' => htmlspecialchars($this->input->post('institusi_nama', true)),
            'institusi_telpon' => htmlspecialchars($this->input->post('institusi_telpon', true)),
            'institusi_alamat' => htmlspecialchars($this->input->post('institusi_alamat', true)),
            'instansi_nama' => htmlspecialchars($this->input->post('instansi_nama', true)),
            'instansi_telpon' => htmlspecialchars($this->input->post('instansi_telpon', true)),
            'instansi_alamat' => htmlspecialchars($this->input->post('instansi_alamat', true)),
            'instansi_mulai' => htmlspecialchars($this->input->post('instansi_mulai', true)),
            'instansi_sampai' => htmlspecialchars($this->input->post('instansi_sampai', true)),
            'semester_aktif' => htmlspecialchars($this->input->post('semester_aktif', true)),
            'password' => htmlspecialchars($this->input->post('password', true))
        ];

        // menginputkan data registrasi
        if ($this->m_mhs->insert($data)) {
            // memberikan flashdata message kalau registrasi berhasil
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menambahkan data</div>');
        }

        // redirect ke controller tahun_masterdata
        return redirect('mahasiswa');
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Mahasiswa';
        $data['sidebar'] = 'mahasiswa';
        $data['mhs'] = $this->m_mhs->get($id);
        // validasi form
        // apply unique rules ketika input kode m_mhs tidak sesuai dengan nilai pada db
        $this->form_validation_rules();

        // jika validasi gagal
        if ($this->form_validation->run() == false) {
            return $this->template_view->load('mahasiswa/edit', $data);
        }
        $data = [
            'mahasiswa_id' => htmlspecialchars($this->input->post('mahasiswa_id', true)),
            'nim' => htmlspecialchars($this->input->post('nim', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'konsentrasi_id' => htmlspecialchars($this->input->post('konsentrasi_id', true)),
            'angkatan' => htmlspecialchars($this->input->post('angkatan', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'semester' => htmlspecialchars($this->input->post('semester', true)),
            'gender' => htmlspecialchars($this->input->post('gender', true)),
            'agama' => htmlspecialchars($this->input->post('agama', true)),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
            'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu', true)),
            'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah', true)),
            'no_hp_ortu' => htmlspecialchars($this->input->post('no_hp_ortu', true)),
            'pekerjaan_ibu' => htmlspecialchars($this->input->post('pekerjaan_ibu', true)),
            'pekerjaan_ayah' => htmlspecialchars($this->input->post('pekerjaan_ayah', true)),
            'alamat_ayah' => htmlspecialchars($this->input->post('alamat_ayah', true)),
            'alamat_ibu' => htmlspecialchars($this->input->post('alamat_ibu', true)),
            'penghasilan_ayah' => htmlspecialchars($this->input->post('penghasilan_ayah', true)),
            'penghasilan_ibu' => htmlspecialchars($this->input->post('penghasilan_ibu', true)),
            'sekolah_nama' => htmlspecialchars($this->input->post('sekolah_nama', true)),
            'sekolah_telpon' => htmlspecialchars($this->input->post('sekolah_telpon', true)),
            'sekolah_alamat' => htmlspecialchars($this->input->post('sekolah_alamat', true)),
            'sekolah_jurusan' => htmlspecialchars($this->input->post('sekolah_jurusan', true)),
            'sekolah_tahun_lulus' => htmlspecialchars($this->input->post('sekolah_tahun_lulus', true)),
            'kampus_nama' => htmlspecialchars($this->input->post('kampus_nama', true)),
            'kampus_telpon' => htmlspecialchars($this->input->post('kampus_telpon', true)),
            'kampus_alamat' => htmlspecialchars($this->input->post('kampus_alamat', true)),
            'kampus_jurusan' => htmlspecialchars($this->input->post('kampus_jurusan', true)),
            'kampus_tahun_lulus' => htmlspecialchars($this->input->post('kampus_tahun_lulus', true)),
            'institusi_nama' => htmlspecialchars($this->input->post('institusi_nama', true)),
            'institusi_telpon' => htmlspecialchars($this->input->post('institusi_telpon', true)),
            'institusi_alamat' => htmlspecialchars($this->input->post('institusi_alamat', true)),
            'instansi_nama' => htmlspecialchars($this->input->post('instansi_nama', true)),
            'instansi_telpon' => htmlspecialchars($this->input->post('instansi_telpon', true)),
            'instansi_alamat' => htmlspecialchars($this->input->post('instansi_alamat', true)),
            'instansi_mulai' => htmlspecialchars($this->input->post('instansi_mulai', true)),
            'instansi_sampai' => htmlspecialchars($this->input->post('instansi_sampai', true)),
            'semester_aktif' => htmlspecialchars($this->input->post('semester_aktif', true)),
            'password' => htmlspecialchars($this->input->post('password', true))
        ];

        // menginputkan data registrasi
        if ($this->m_mhs->update($id, $data)) {
            // memberikan flashdata message kalau berhasil update
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menambahkan pengguna baru</div>');
        } else {
            // memberikan flashdata message kalau gagal update
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Berhasil menambahkan pengguna baru</div>');
        }
        // redirect ke controller tahun_akademik
        return redirect('mahasiswa');
    }

    public function delete($id)
    {
        if ($this->m_mhs->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">
            Berhasil menghapus data</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">
            Gagal menghapus data</div>');
        }
        redirect('mahasiswa');
    }

}
