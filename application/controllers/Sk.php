<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sk extends CI_Controller {
	public function __construct(){
		parent:: __construct();

		if($this->session->userdata('role_id')!= '2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda Belum Login!!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('auth/login');
		}
	}
	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
	}

	public function insert(){
		
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');

        $no = 1;

		$data = array(
					  'nip' => $this->input->post('nip',true),
					  'no_surat' => $this->input->post('no_surat',true),
					  'tgl' => $this->input->post('tgl',true),
					  'nama' => $this->input->post('nama',true),
					  'no_hp' => $this->input->post('no_hp',true),
					  'email' => $this->input->post('email',true),
					  'deskripsi' => $this->input->post('deskripsi',true));
		$insert =  $this->model_app->prosesInsert('tb_form_sk', $data);
		if($insert > 0){
			echo 'Data Berhasil disimpan';

		}else{
			echo 'Data Gagal disimpan';
		}

		
	}

	
}
