<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

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

		$data = array('nim_mhs' => $this->input->post('nim_mhs',true),
					  'nama_mhs' => $this->input->post('nama_mhs',true),
					  'tgl' => $this->input->post('tgl',true),
					  'email' => $this->input->post('email',true),
					  'prodi' => $this->input->post('prodi',true),
					  'no_hp' => $this->input->post('no_hp',true),
					  'alamat' => $this->input->post('alamat',true),
					  'cuti' => $this->input->post('cuti',true),
					  'ta' => $this->input->post('ta',true),
					  'keterangan_cuti' => $this->input->post('keterangan_cuti',true));
		$insert =  $this->app_model->prosesInsert('tb_form_mhs', $data);
		if($insert > 0){
			echo 'Data Berhasil disimpan';

		}else{
			echo 'Data Gagal disimpan';
		}

	}
}
