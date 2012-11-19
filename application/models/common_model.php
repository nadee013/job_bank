<?php 


class Common_model extends CI_Model {

	public function insertUser_candidate($email, $password) {	
			
			$sql = "INSERT INTO candidate_user(email, password) VALUES('$email', '$password')";
			$this->db->query($sql);

	}

	public function insertUser_company($email, $password) {	
			
			$sql = "INSERT INTO company_user(email, password) VALUES('$email', '$password')";
			$this->db->query($sql);

	}


	public function get_loggedCan($email,$password) {
		
		$sql = "SELECT * FROM candidate_user WHERE email='$email' AND password='$password'";
		return $this->db->query($sql)->result_array();
	}


	public function get_loggedCom($email,$password) {
		
		$sql = "SELECT * FROM company_user WHERE email='$email' AND password='$password'";
		return $this->db->query($sql)->result_array();
	}



}