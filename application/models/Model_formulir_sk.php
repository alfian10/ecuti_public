<?php 

class Model_formulir_sk extends CI_Model{
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

	public function tampil_data2($id){
		$result = $this->db->where('id',$id)->get('tb_form_sk');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function edit_data($where, $table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}