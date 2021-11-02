<?php 

class Formulir_masuk_dosen extends CI_Controller{
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
	public function index(){

		$data['formulir_masuk_dosen'] = $this->model_formulir_dosen->tampil_data()->result();
		$this->load->view('templates_sdn/header');
		$this->load->view('templates_sdn/sidebar');
		$this->load->view('sdn/formulir_masuk_dosen', $data);
		$this->load->view('templates_sdn/footer');
	}

	public function detail($id){
		$data['formulir_masuk_dosen'] = $this->model_formulir_dosen->detail_dsn($id);
		$this->load->view('templates_sdn/header');
		$this->load->view('templates_sdn/sidebar');
		$this->load->view('sdn/detail_dosen', $data);
		$this->load->view('templates_sdn/footer');
	}

	public function print($id){
		$data['formulir_masuk_dosen'] = $this->model_formulir_dosen->tampil_data2($id);
		$this->load->view('print/header');
		$this->load->view('sdn/print_dosen', $data);
		$this->load->view('print/footer');
	}

	public function edit($id){
		$where = array('id' => $id);
		$data['formulir_masuk_dosen'] = $this->model_formulir_dosen->edit_data($where,'tb_form_dosen')->result();
		$this->load->view('templates_sdn/header');
		$this->load->view('templates_sdn/sidebar');
		$this->load->view('sdn/edit', $data);
		$this->load->view('templates_sdn/footer');
	}

	public function update(){
		$id  	= $this->input->post('id');
		$status = $this->input->post('status');
		$alasan = $this->input->post('alasan');

		$data = array(
			'id'	 => $id,
			'status' => $status,
			'alasan' => $alasan
	);
		$where = array(
			'id' => $id
		);

		$this->model_formulir_dosen->update_data($where,$data,'tb_form_dosen');
		redirect('sdn/formulir_masuk_dosen/index');
	}

	public function email($id){
		$data['formulir_masuk_dosen'] = $this->model_formulir_dosen->detail_dsn($id);
		$this->load->view('templates_sdn/header');
		$this->load->view('templates_sdn/sidebar');
		$this->load->view('sdn/email', $data);
		$this->load->view('templates_sdn/footer');

	}

	public function sendMail(){

		if(isset($_POST['submit'])){
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$pesan = $this->input->post('pesan');

			if(!empty($email)){
				//configuration to email
				$config = array('mailtype' => 'html',
					'charset' => 'iso-8859-1',
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.gmail.com',
					'smtp_user' => 'wirawanadialfian15@gmail.com',
					'smtp_pass' => 'alfi_1504',
					'smtp_port' => 465
				);
					
					

				$this->load->library('email', $config);

				$this->email->set_newline("\r\n");

				$this->email->from('wirawanadialfian15@gmail.com');
				$this->email->to($email);
				$this->email->cc('wirawanadialfian15@gmail.com');
				$this->email->subject($subject);
				$this->email->message($pesan);

				if (!$this->email->send()){
					echo 'Email gagal dikirim';			
				}else{
					$this->load->view('templates_sdn/header');
					$this->load->view('templates_sdn/sidebar');
					echo 'Email berhasil dikirim';
					$this->load->view('templates_sdn/footer');
					
					
				}
			}

		}
	
}
	}

