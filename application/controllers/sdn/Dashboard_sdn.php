<?php 

class Dashboard_sdn extends CI_Controller{

	//menentukan role_id
	public function __construct(){
		parent:: __construct();

		if($this->session->userdata('role_id')!= '4'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda Belum Login!!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('auth/login');
		}
	}
	//index templates
	public function index(){
		$data['formulir_masuk_dosen'] = $this->model_formulir_dosen->tampil_data()->result();
		$this->load->view('templates_sdn/header');
		$this->load->view('templates_sdn/sidebar');
		$this->load->view('sdn/dashboard_sdn', $data);
		$this->load->view('templates_sdn/footer');
	}
	public function dashboard_detail($id){
		$data['formulir_masuk_dosen'] = $this->model_dashboard_sdn->detail_dsn($id);
		$this->load->view('templates_sdn/header');
		$this->load->view('templates_sdn/sidebar');
		$this->load->view('sdn/dashboard_detail', $data);
		$this->load->view('templates_sdn/footer');
	}
}