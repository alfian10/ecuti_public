<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model {

	public function prosesInsert($table_name,$data){
		$insert = $this->db->insert($table_name,$data);
		return $insert;
	}
}
