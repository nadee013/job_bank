<?php

class CandidateView extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$this->load->database();
		$this->load->helper("form");

		$this->load->library("input");


		$this->load->model("candidateView_model", "model");

		$this->load->view("header");
		
	}

	public function index() {

		$user = $this->session->userdata('id');
		
		$this->view_basicinfo($user);
		$this->view_eduquali_ol($user);
		$this->view_eduquali_al($user);
		$this->view_higher_eduquali($user);
		$this->view_sports($user);
		$this->load->view("footer");
		
	}


	public function get_mainProfile($action = NULL) {
		
		
		$user = $this->session->userdata('id');
		$profile = $this->model->get_basicinfo($user);
		$vacancies = $this->model->get_vacancies($user, $action);
		
		$row = array("profile" => $profile, "vacancies" => $vacancies, "action" => $action);
		// print_r($row);
		if($row['profile']) {

			$this->load->view("candidate/view/profile_base", $row);

		} else {

			$this->load->view("candidate/insert/personal_details");
		}

		$this->load->view("footer");
		
	}


	public function view_basicinfo($user) {

		// $user = $this->session->userdata('id');
		$basicinfo = $this->model->get_basicinfo($user);

		$row = array("basic" => $basicinfo);
		$this->load->view("candidate/view/basicinfo", $row);

	}


	public function view_eduquali_ol($user) {

		// $user = $this->session->userdata('id');
		$ol = $this->model->get_eduquali_ol($user);

		$row_ol = array("row" => $ol);
		$this->load->view("candidate/view/edu_quali_ol", $row_ol);

	}

	public function view_eduquali_al($user) {
		
		// $user = $this->session->userdata('id');
		$al = $this->model->get_eduquali_al($user);

		$row_al = array("row" => $al);
		$this->load->view("candidate/view/edu_quali_al", $row_al);
	}


	public function view_higher_eduquali($user) {
		
		// $user = $this->session->userdata('id');
		$high = $this->model->get_higher_eduquali($user);

		$high= array("high" => $high);
		$this->load->view("candidate/view/higher_edu", $high);
	}

	public function view_sports($user) {
		
		
		// $user = $this->session->userdata('id');
		$sport = $this->model->get_sports($user);

		$sport= array("sport" => $sport);
		$this->load->view("candidate/view/sports", $sport);
	}

	

	public function view_profile_to_company($u_id) {

		$user = $u_id;
		
		$basicinfo = $this->model->get_basicinfo($user);
		$ol_result = $this->model->get_eduquali_ol($user);
		$al_result = $this->model->get_eduquali_al($user);
		
		$row = array("ol_result" => $ol_result, "basicinfo" => $basicinfo, "al_result" => $al_result);
		
		$this->load->view("candidate/view/profile_for_company", $row);

		$this->load->view("footer");
		
		
	}

	public function view_vacancy_details($vacancy_id) {

		$candidate_id = $this->session->userdata("id");

		$vacancy_full_data = $this->model->get_company_vacancy_details($vacancy_id, $candidate_id);

		$row = array("vacancy_data" => $vacancy_full_data);

		$time_slots_converted = json_decode($vacancy_full_data[0]["time_slots"], true);
		$st_date = $time_slots_converted[0]["st"];
		//$end_date =  $time_slots_converted[0]["et"];

		$row['s_date'] = $st_date;
		//$row['e_date'] = $end_date;
		//print_r($row);

		$this->load->view("vacancy/candidate/vacancy_detail", $row);
		
		$this->load->view("footer");
	}

	
}