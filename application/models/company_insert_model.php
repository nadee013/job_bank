<?php

class Company_insert_model extends CI_Model {

	public function insert_profile($user_id, $industry, $company_name, $address, $district, $country, $tp, $fax, $path, $web) {

		$sql = "INSERT INTO company(user_id, cmpny_name, address, industry, district, country, tp, fax, logo, web_url) VALUES (?,?,?,?,?,?,?,?,?,?)";
		$this->db->query($sql, array($user_id, $company_name, $address, $industry, $district, $country, $tp, $fax, $path, $web));
	}


	public function insert_payment($user_id, $plan, $payment) {
		
		$sql = "INSERT INTO payment(user_id, plan, method) VALUES (?,?,?)";
		$this->db->query($sql, array($user_id, $plan, $payment));
	}


	public function insert_vacancy($user_id, $designation, $gender, $age1, $age2, $location, $m_quali) {
		
		$sql = "INSERT INTO vacancy(cmpny_id, designation, gender, age1, age2, location, minimal_quali) VALUES(?,?,?,?,?,?,?)";
		$this->db->query($sql, array($user_id, $designation, $gender, $age1, $age2, $location, $m_quali));
	}
}