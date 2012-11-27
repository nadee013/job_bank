<?php

class Vacancy_Model extends CI_Model {


	public function insert_schedule_data($cmpny_id, $position, $job_desc, $msg, $interview_due, $time_slots) {
		
		$sql = "INSERT INTO vacancy(cmpny_id, position, job_desc, msg, interview_due, time_slots) VALUES('$cmpny_id', '$position', '$job_desc', '$msg', '$interview_due', '$time_slots')";
		$this->db->query($sql);

		$sql = "SELECT vacancy_id FROM vacancy WHERE cmpny_id = $cmpny_id ORDER BY vacancy_id DESC LIMIT 1";
		$vacancies = $this->db->query($sql)->result_array();
		return $vacancies[0]['vacancy_id'];

	}


	public function insert_candidates_of_the_post($vacancy_id, $cmpny_id, $candidate_id) {

		$sql = "INSERT INTO candidates_for_vacancy(vacancy_id, cmpny_id, candidate_id) VALUES('$vacancy_id', '$cmpny_id', '$candidate_id')";
		$this->db->query($sql);
		
	}


	public function get_vacancies($cmpny_id, $action) {
		
		$sql = "SELECT * FROM vacancy WHERE cmpny_id = $cmpny_id ";
		if($action) {
			$sql .= "AND action = '$action'";

		}
		return $this->db->query($sql)->result_array();
		
	}

	public function get_vacancy_data_load($vacancy_id, $action) {
		
		$sql = "SELECT candidate_id, action FROM candidates_for_vacancy WHERE vacancy_id = $vacancy_id ";
		if($action) {
			$sql .= "AND action = '$action'";
		}
		return $this->db->query($sql)->result_array();
	}


	public function get_candidate_detail($vacancy_id, $candidate_ids) {

		
		$list_of_candidate_ids = implode(",", $candidate_ids);
		//echo "$list_of_candidate_ids";

		$sql = "SELECT DISTINCT c.f_name, c.l_name, c.user_id, v.action FROM candidate_basicinfo c, candidates_for_vacancy v WHERE c.user_id IN ($list_of_candidate_ids) AND vacancy_id = $vacancy_id"; 
		// echo $sql;
		return $this->db->query($sql)->result_array();

		
	}

	public function get_candidate_detail_with_action($vacancy_id, $action) {

		$sql = "SELECT cfv.*, c.* FROM candidate_basicinfo c, candidates_for_vacancy cfv WHERE c.user_id = cfv.candidate_id AND cfv.vacancy_id = ? ";
		if($action) {
			$sql.= "AND action = ?";
		}

		return $this->db->query($sql, array($vacancy_id, $action))->result_array();
	}


	public function get_all_candidates_for_vacancy($vacancy_id) {
		/* 
			output : candidates details
			input : vacancy id
			steps : 
				* vacancy id eken candidate ids ganna oona
				* eken basic info ganna oona
		*/
		$sql = "SELECT DISTINCT c.* FROM candidates_for_vacancy v, candidate_basicinfo c WHERE v.candidate_id = c.user_id AND vacancy_id= $vacancy_id";
		return $this->db->query($sql)->result_array();
	}
	

}