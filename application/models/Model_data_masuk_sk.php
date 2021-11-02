<?php 

class Model_data_masuk_sk extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_form_sk');
	}

	public function detail_sk($id){
		$result = $this->db->where('id',$id)->get('tb_form_sk');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	
}