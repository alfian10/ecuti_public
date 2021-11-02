<?php 

class Model_data_masuk extends CI_Model{
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

	public function tampil_data2(){
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