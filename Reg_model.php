<?php

class Reg_model extends CI_Model{

	public function create($formArray){

		$this->db->insert('users',$formArray);
	}
}

?>