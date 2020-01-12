<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function register()
	{
		$this->load->view('template/header');
		$this->load->view('auth/register');
		$this->load->view('template/footer');
	}

	public function checkSubdomain()
	{
		$subdomain = $this->input->post('subdomain');
		$result = $this->db->get_where('desa', ['subdomain' => $subdomain])->row_array();
		if ($result) {
			echo "
			<script>
				document.getElementById('notif').innerHTML='subdomain telah ada!';
				console.log('ada')
			</script>
			";
		} else {
			echo "
			<script>
				document.getElementById('notif').innerHTML='subdomain tersedia!';
				console.log('tidak')
			</script>
			";
		}
	}
}
