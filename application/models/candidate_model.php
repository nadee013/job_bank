<?php 


class Candidate_model extends CI_Model {

	public function insertUser($email, $password) {	
			
			$sql = "INSERT INTO candidate_user(email, password) VALUES('$email', '$password')";
			$this->db->query($sql);

	}


	public function get_loggedUser($email,$password) {
		
		$sql = "SELECT * FROM candidate_user WHERE email='$email' AND password='$password'";
		return $this->db->query($sql)->result_array();
	}



}