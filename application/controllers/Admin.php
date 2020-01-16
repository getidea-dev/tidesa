<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
	        $this->load->view('template/header');
	        $this->load->view('template/navbar');
	        $this->load->view('admin/index');
	        $this->load->view('template/footer');
    }
    public function pengajuanDesa(){
    	$data['pengajuan'] = $this->db->get('pengajuan_desa')->result_array();

    	$this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('admin/pengajuanDesa', $data);
        $this->load->view('template/footer');
    }
}
