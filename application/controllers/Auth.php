<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function register()
	{
		//validasi form
		$this->form_validation->set_rules('nama_lengkap', 'Nama lengkap', 'required|trim', ['required' => '%s harus di isi']);
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email',
			[
				'required' => '%s harus di isi',
				'valid_email' => '%s bukanlah format email'
			]
		);
		$this->form_validation->set_rules('tempat_lahir', 'Tempat lahir', 'required|trim', ['required' => '%s harus di isi']);
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required|trim', ['required' => '%s harus di isi']);
		$this->form_validation->set_rules(
			'no_telepon',
			'No telepon',
			'required|trim|integer',
			[
				'required' => '%s harus di isi',
				'integer' => '%s bukanlah nomor telepon'
			]

		);
		// $this->form_validation->set_rules('file', 'File', 'required');
		$this->form_validation->set_rules('nama_desa', 'Nama desa', 'required|trim', ['required' => '%s harus di isi']);
		$this->form_validation->set_rules(
			'subdomain',
			'Subdomain',
			'required|trim|is_unique[desa.subdomain]',
			[
				'is_unique' => 'Subdomain telah terpakai!',
				'required' => '%s harus di isi'
			]
		);

		if ($this->form_validation->run() == false) {
			//jika gagal validasi
			$this->load->view('template/header');
			$this->load->view('auth/register');
			$this->load->view('template/footer');
		} else {
			//jika berhasil
			$data = [
				'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap')),
				'email' => htmlspecialchars($this->input->post('email')),
				'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
				'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir')),
				'no_telepon' => htmlspecialchars($this->input->post('no_telepon')),
				'file' => 'gambar',
				'nama_desa' => htmlspecialchars($this->input->post('nama_desa')),
				'subdomain' => htmlspecialchars($this->input->post('subdomain'))
			];

			$this->db->insert('pengajuan_desa', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Desa anda telah berhasil di daftarkan! Menunggu konfirmasi admin</div>');
			redirect('auth/register');
		}
	}

	public function checkSubdomain()
	{
		$subdomain = $this->input->post('subdomain');

		echo json_encode($this->db->get_where('desa', ['subdomain' => $subdomain])->row_array());
	}

	public function test()
	{
		$result = $this->db->get_where('desa', ['subdomain' => '0'])->row_array();
		var_dump($result);
	}
}
