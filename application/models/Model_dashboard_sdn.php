<?php 

class Model_dashboard_sdn extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_form_dosen');
	}

	public function detail_dsn($id){
		$result = $this->db->where('id',$id)->get('tb_form_dosen');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	
}