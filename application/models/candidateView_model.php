<?php 

class CandidateView_model extends CI_Model {



	public function get_basicinfo($user) {

		$sql = "SELECT * FROM candidate_basicinfo WHERE user_id = $user";
		return $this->db->query($sql)->result_array();
	}

	public function get_eduquali_ol($user)	{	

		$sql_ol = "SELECT * FROM ol WHERE user_id = $user";
		return $this->db->query($sql_ol)->result_array();

	}

	public function get_eduquali_al($user) {
		
		$sql_al = "SELECT * FROM al WHERE user_id = $user";
		return $this->db->query($sql_al)->result_array();

	}

	public function get_higher_eduquali($user) {
		
		$sql = "SELECT * FROM higher_edu WHERE user_id = $user";
		return $this->db->query($sql)->result_array();

	}

	public function get_sports($user) {
		
		$sql = "SELECT * FROM sport WHERE user_id = $user";
		return $this->db->query($sql)->result_array();

	}

	public function get_vacancies($user_id, $action) {

		$sql = "SELECT DISTINCT c.*, v.position FROM candidates_for_vacancy c, vacancy v WHERE c.candidate_id = $user_id AND c.vacancy_id = v.vacancy_id ";
		if($action) {
			$sql .= "AND c.action = '$action'";

		}
		return $this->db->query($sql)->result_array();
		
	}

	public function get_company_vacancy_details($vacancy_id, $candidate_id) {

		$sql = "SELECT c.*, com.*, v.* FROM candidates_for_vacancy c, company com, vacancy v WHERE c.vacancy_id = $vacancy_id AND c.candidate_id = $candidate_id AND com.user_id = c.cmpny_id ANd v.vacancy_id = $vacancy_id";
		return $this->db->query($sql)->result_array();
		
	}

}