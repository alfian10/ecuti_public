<?php 

class Formulir_masuk_mhs extends CI_Controller{

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
	public function index(){
		$data['formulir_masuk_mhs'] = $this->model_formulir_mhs->tampil_data()->result();
		$this->load->view('templates_akademik/header');
		$this->load->view('templates_akademik/sidebar');
		$this->load->view('akademik/formulir_masuk_mhs', $data);
		$this->load->view('templates_akademik/footer');
	}

	public function detail($id_mhs){
		$data['formulir_masuk_mhs'] = $this->model_formulir_mhs->detail_mhs($id_mhs);
		$this->load->view('templates_akademik/header');
		$this->load->view('templates_akademik/sidebar');
		$this->load->view('akademik/detail_mahasiswa', $data);
		$this->load->view('templates_akademik/footer');
	}

	public function print($id_mhs){
		$data['formulir_masuk_mhs'] = $this->model_formulir_mhs->tampil_data2($id_mhs);
		$this->load->view('print/header');
		$this->load->view('akademik/print_mahasiswa', $data);
		$this->load->view('print/footer');
	}

	public function edit($id_mhs){
		$where = array('id_mhs' => $id_mhs);
		$data['formulir_masuk_mhs'] = $this->model_formulir_mhs->edit_data($where,'tb_form_mhs')->result();
		$this->load->view('templates_akademik/header');
		$this->load->view('templates_akademik/sidebar');
		$this->load->view('akademik/edit', $data);
		$this->load->view('templates_akademik/footer');
	}

	public function update(){
		$id_mhs = $this->input->post('id_mhs');
		$status = $this->input->post('status');
		$alasan = $this->input->post('alasan');

		$data = array(
			'id_mhs' => $id_mhs,
			'status' => $status,
			'alasan' => $alasan
	);
		$where = array(
			'id_mhs' => $id_mhs
		);

		$this->model_formulir_mhs->update_data($where,$data,'tb_form_mhs');
		redirect('akademik/formulir_masuk_mhs/index');
	}

	public function email($id){
		$data['formulir_masuk_mhs'] = $this->model_formulir_mhs->detail_mhs($id);
		$this->load->view('templates_akademik/header');
		$this->load->view('templates_akademik/sidebar');
		$this->load->view('akademik/email', $data);
		$this->load->view('templates_akademik/footer');

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
					$this->load->view('templates_akademik/header');
					$this->load->view('templates_akademik/sidebar');
					echo 'Email berhasil dikirim';
					$this->load->view('templates_akademik/footer');
					
					
				}
			}

		}
	
}
}