<?php

class Company_vw_edt_model extends CI_Model {

	public function view_profile($company_id) {
		
		$sql = "SELECT * FROM company WHERE user_id = $company_id";
		return $this->db->query($sql)->result_array();

	}

	public function edit_companyDetails($user_id, $industry, $company_name, $address, $district, $country, $tp, $fax, $logo, $web) {
		
		$sql = "UPDATE company SET industry = '$industry',
										cmpny_name = '$company_name',
										address = '$address',
										district = '$district',
										country = '$country',
										tp = '$tp',
										fax = '$fax',
										logo = '$logo',
										web_url = '$web' WHERE user_id = $user_id";
		$this->db->query($sql);
		echo $sql;
	}


	public function get_profile_data($company_id) {
		
		$sql = "SELECT * FROM company WHERE user_id = $company_id";
		return $this->db->query($sql)->result_array();
	}

	public function deactivate_vacancy($company, $vacancy) {

		//update vacacy for action state
		$this->db->where('vacancy_id', $vacancy);
		$this->db->where('cmpny_id', $company);

		$this->db->update('vacancy', array('action' => 'de-active'));

		//update all the cadidates for this vacancy with state pending to rejected.
		$this->db->where('vacancy_id', $vacancy);
		$this->db->where('cmpny_id', $company);
		$this->db->where('action', 'pending');

		$this->db->update('candidates_for_vacancy', array('action' => 'rejected'));

	}
	
}