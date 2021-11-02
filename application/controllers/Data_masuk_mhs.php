<?php 

class Data_masuk_mhs extends CI_Controller{
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
	public function index(){
		$data['data_masuk_mhs'] = $this->model_data_masuk->tampil_data2()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('data_masuk_mhs', $data);
		$this->load->view('templates/footer');
	}
	public function detail_data_masuk_mhs($id_mhs){
		$data['data_masuk_mhs'] = $this->model_data_masuk->detail_mhs($id_mhs);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_data_masuk_mhs', $data);
		$this->load->view('templates/footer');
	}
	
}
