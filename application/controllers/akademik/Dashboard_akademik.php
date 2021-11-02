<?php 

class Dashboard_akademik extends CI_Controller{

	//menentukan role_id
	public function __construct(){
		parent:: __construct();

		if($this->session->userdata('role_id')!= '3'){
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
		$data['formulir_masuk_mhs'] = $this->model_formulir_mhs->tampil_data()->result();
		$this->load->view('templates_akademik/header');
		$this->load->view('templates_akademik/sidebar');
		$this->load->view('akademik/dashboard_akademik', $data);
		$this->load->view('templates_akademik/footer');
	}
	public function dashboard_detail($id_mhs){
		$data['formulir_masuk_mhs'] = $this->model_dashboard_akademik->detail_mhs($id_mhs);
		$this->load->view('templates_akademik/header');
		$this->load->view('templates_akademik/sidebar');
		$this->load->view('akademik/dashboard_detail', $data);
		$this->load->view('templates_akademik/footer');
	}
}