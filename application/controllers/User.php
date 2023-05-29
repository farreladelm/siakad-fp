<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    public function index()
    {
        $data['page_title'] = 'User';
        $data['users'] = $this->user_model->get();
        print_r($data['users']);
        // $this->template_view->load('user/index', $data);
    }
}
