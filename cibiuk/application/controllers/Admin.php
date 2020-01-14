<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function index()
	{
		$data['subdomain'] = subdomain();
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('admin');
		$this->load->view('template/footer');
	}
}