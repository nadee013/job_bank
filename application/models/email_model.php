<?php

class Email_Model extends CI_Model {


	var $config = array(
		'protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.googlemail.com',
		'smtp_port' => 465,
		'smtp_user' => 'arunoda@kodeincloud.com', // your email
		'smtp_pass' => 'Maxapoweraru', // your password
		'mailtype' => 'html',
		'charset' => 'iso-8859-1',
		'wordwrap' => TRUE
	);


	public function send($from, $to, $title, $msg) {

		$this->load->library('email', $this->config);
		$this->email->set_newline("\r\n");
		$this->email->from($from); // company email address
		$this->email->to($to); // candidates email address
		$this->email->subject($title);
		$this->email->message($msg);

		if($this->email->send()) {

			return true;

		} else {

			return $this->email->print_debugger();
		}

	}


	public function get_inviting_company_email($cmpny_id) {

		$sql = "SELECT email FROM company_user WHERE user_id = $cmpny_id";
		return $this->db->query($sql)->result_array();
	
	}


	public function get_inviting_candidates_ids($company_id, $vacancy_id) {

		$sql = "SELECT DISTINCT candidate_id FROM candidates_for_vacancy WHERE cmpny_id = $company_id AND vacancy_id = $vacancy_id";
		return $this->db->query($sql)->result_array();
		
	}


	public function get_inviting_candidates_emails($candidate_ids){

		$list_of_candidate_ids = implode(",", $candidate_ids);

		$sql = "SELECT email FROM candidate_user WHERE user_id IN($list_of_candidate_ids)";
		return $this->db->query($sql)->result_array();
	}


	public function get_email_body_from_db($cmpny_id, $vacancy_id) {

		$sql = "SELECT msg FROM vacancy WHERE cmpny_id = $cmpny_id AND vacancy_id = $vacancy_id LIMIT 1";
		return $this->db->query($sql)->result_array();
		
	}

	public function get_vacancy_name($vacancy_id) {

		$sql = "SELECT position FROM vacancy WHERE vacancy_id = $vacancy_id";
		return $this->db->query($sql)->result_array();
		
	}
}