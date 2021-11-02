<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
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
					  'nip_dosen' => $this->input->post('nip_dosen',true),
					  'no_surat' => $this->input->post('no_surat',true),
					  'tgl' => $this->input->post('tgl',true),
					  'nama_dosen' => $this->input->post('nama_dosen',true),
					  'jabatan' => $this->input->post('jabatan',true),			  
					  'email' => $this->input->post('email',true),
					  'no_hp' => $this->input->post('no_hp',true),
					  'awal_cuti' => $this->input->post('awal_cuti',true),
					  'akhir_cuti' => $this->input->post('akhir_cuti',true),
				 	  'jenis_cuti' => $this->input->post('jenis_cuti',true),
					  'ket_cuti' => $this->input->post('ket_cuti',true));
		$insert =  $this->app_model->prosesInsert('tb_form_dosen', $data);
		if($insert > 0){
			echo 'Data Berhasil disimpan, ';
			echo 'Tunggu dan silahkan cek kembali di Data Masuk';

		}else{
			echo 'Data Gagal disimpan';
		}
	}
	
}
