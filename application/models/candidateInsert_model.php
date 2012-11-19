<?php

class CandidateInsert_model extends CI_Model {

	

	/*public function get_user_id($u_id) {
		
		$sql = "SELECT user_id FROM candidate_user WHERE user_id = '$u_id'";
		$this->db->query($sql);

	}*/



	public function insertBasic($user_id, $title, $pic, $f_name, $l_name, $dob,$gender, $status, $address, $district, $country, $nationality, $mobile, $home, $nic, $cv) {

		$sql = "INSERT INTO candidate_basicinfo(user_id, title, pic, f_name, l_name, dob, gender, civil_status, address, district, country, nationality, tp_hm, tp_mobile, nic_no, cv) VALUES('$user_id', '$title', '$pic', '$f_name', '$l_name', '$dob', '$gender', '$status', '$address', '$district', '$country', '$nationality', '$mobile', '$home', '$nic', '$cv');";
		$this->db->query($sql);

		
	}

	

	public function insertEduQuali_ol($user_id, $o_index, $o_school, $o_yr, $o_medium, $o_subject, $o_grade) {

		$sql_ol = "INSERT INTO ol(user_id, ol_index, school, year, medium, subject, grade) VALUES('$user_id', '$o_index', '$o_school', '$o_yr', '$o_medium', '$o_subject', '$o_grade')";
		$this->db->query($sql_ol);

		

	}


	public function insertEduQuali_al($user_id, $a_index, $a_school, $a_yr, $a_medium, $a_stream, $al_subject, $a_grade) {

	$sql_al = "INSERT INTO al(user_id, al_index, school, year, medium, stream, subject, grade) VALUES('$user_id', '$a_index', '$a_school', '$a_yr', '$a_medium', '$a_stream', '$al_subject', '$a_grade')";
	$this->db->query($sql_al);

	

	}




	public function insertHigherEdu($user_id, $uni, $level, $desc, $yr) {
	
		$sql = "INSERT INTO higher_edu(user_id, university, level, description, year) VALUES('$user_id', '$uni', '$level', '$desc', '$yr');";
		$this->db->query($sql);

	}




	public function insertSports($user_id, $sport, $description, $achvmnt, $yr) {
	
		$sql = "INSERT INTO sport(user_id, sport, achivement, description, year) VALUES('$user_id', '$sport', '$description', '$achvmnt', '$yr');";
		$this->db->query($sql);

	}

	

	
}