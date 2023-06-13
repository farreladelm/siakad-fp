<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends Auth_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('mahasiswa_model');
		$this->load->model('dosen_model');
		$this->load->model('ruangan_model');
	}
	public function index()
	{
		$data['page_title'] = 'Dashboard';
		$data['sidebar'] = 'Dashboard';
		$data['jumlah_user'] = $this->user_model->get_count();
		$data['latest_user'] = $this->user_model->latest_user();
		$data['jumlah_mahasiswa'] = $this->mahasiswa_model->get_count();
		$data['jumlah_dosen'] = $this->dosen_model->get_count();
		$data['jumlah_ruangan'] = $this->ruangan_model->get_count();

		// print_r($data);
		return $this->template_view->load('index', $data);
	}
}
