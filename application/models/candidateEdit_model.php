<?php

class CandidateEdit_model extends CI_Model {


	public function edit_basicinfo($user_id, $title, $pic, $f_name, $l_name, $dob, $gender, $status, $address, $district, $country, $nationality, $mobile, $home,  $nic) {
		
		$sql = "UPDATE candidate_basicinfo SET title = ?,
												pic = '$pic',
											   f_name = ?,
											   l_name = ?,
											   dob = ?,
											   gender = ?,
											   civil_status = ?,
											   address = ?,
											   district = ?,
											   country = ?,
											   nationality = ?,
											   tp_hm = ?,
											   tp_mobile = ?,
											   nic_no = ? WHERE user_id = ? ";
		$this->db->query($sql, array($title, $f_name, $l_name, $dob, $gender, $status, $address, $district, $country, $nationality, $mobile, $home,  $nic, $user_id));
		//echo $sql;
	}

	public function delete_ol($user_id) {

		$sql = "DELETE FROM ol WHERE user_id = $user_id";
		$this->db->query($sql);
	}

	public function edit_edu_ol($user_id, $o_index, $o_school, $o_yr, $o_medium, $o_subject, $o_grade) {
		
		$sql = "UPDATE ol SET ol_index = ?,
							  school = ?,
							  year = ?,
							  medium = ?,
							  subject = ?,
							  grade = ? WHERE user_id = ? ";

		$this->db->query($sql , array($o_index, $o_school, $o_yr, $o_medium, $o_subject, $o_grade, $user_id));
	}

	public function delete_al($user_id) {
		
		$sql = "DELETE FROM al WHERE user_id = $user_id";
		$this->db->query($sql);
	}

	public function edit_edu_al($user_id, $a_index, $a_school, $a_stream, $a_yr, $a_medium, $a_subject, $a_grade) {
	
		$sql = "UPDATE al SET al_index = '$a_index',
							  school = '$a_school',
							  year = '$a_yr',
							  medium = '$a_medium',
							  stream = '$a_stream',
							  subject = '$a_subject',
							  grade = '$a_grade' WHERE user_id ='$user_id' ";

		$this->db->query($sql);

	}


	public function edit_higher($user_id, $uni, $level, $description, $yr) {
	
		$sql = "UPDATE higher_edu SET university = '$uni',
							  level = '$level',
							  description = '$description',
							  year = '$yr' WHERE user_id ='$user_id' ";

		$this->db->query($sql);

	}

	public function edit_sport($user_id, $sport, $achivement, $description, $year) {
	
		$sql = "UPDATE sport SET sport = '$sport',
							  achivement = '$achivement',
							  description = '$description',
							  year = '$year' WHERE user_id ='$user_id' ";

		$this->db->query($sql);

	}

	public function accept_interview($vacancy_id, $user_id, $interview_time) {

		$sql = "UPDATE candidates_for_vacancy SET action = 'accepted', interview_time = $interview_time WHERE candidate_id = $user_id and vacancy_id = $vacancy_id";
		$this->db->query($sql);
		
	}

	public function reject_interview($vacancy_id, $user_id) {

		$sql = "UPDATE candidates_for_vacancy SET action = 'rejected' WHERE candidate_id = $user_id and vacancy_id = $vacancy_id";
		$this->db->query($sql);
			
	}

	public function get_vacancy_time_date_due($vacancy_id) {
		
		$sql = "SELECT time_slots, interview_due FROM vacancy WHERE vacancy_id = $vacancy_id";
		$arr = $this->db->query($sql)->result_array();
		return $arr[0];
	}

	public function get_number_of_candidates($vacancy_id) {
		
		$sql = "SELECT count(*) AS cnt FROM candidates_for_vacancy WHERE vacancy_id = $vacancy_id AND action = 'accepted'";
		$arr = $this->db->query($sql)->result_array();
		return $arr[0]['cnt'];
	}
	
	public function set_searchable($user_id, $searchable) {

		$this->db->where("user_id", $user_id);
		$this->db->update("candidate_basicinfo", array(
			"searchable" => ($searchable)? 1: 0
		));
	}
	
}	