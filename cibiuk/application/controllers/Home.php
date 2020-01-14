<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['subdomain'] = subdomain();
		$this->load->view('home/header');
		$this->load->view('home/home', $data);
		$this->load->view('home/footer');
	}
}
