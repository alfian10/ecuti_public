<?php 

class Model_dashboard_akademik extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_form_mhs');
	}

	public function detail_mhs($id_mhs){
		$result = $this->db->where('id_mhs',$id_mhs)->get('tb_form_mhs');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	
}