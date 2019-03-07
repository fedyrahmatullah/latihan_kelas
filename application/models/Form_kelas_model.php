<?php 


class Form_kelas_model extends CI_Model{
	public function insertData($data){
		return $this->db->insert('data_diri',$data);
	}
}