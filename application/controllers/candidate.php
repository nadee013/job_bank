<?php 


class Candidate extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$this->load->database();

		$this->load->helper("url");
		$this->load->helper("form");

		$this->load->library("input");

		$this->load->model("candidate_model", "model");

	}

	public function index() {
		
		$this->get_insertCandidateUser();
		$this->load->view("login");
	}


	public function get_insertCandidateUser() {

		$this->load->view("header");
		$this->load->view("candidate/insert/candidate_user");	
		
	}

	public function do_insertCandidateUser() {

		$email = $this->input->post("email");
		$password = $this->input->post("password");

		$this->model->insertUser($email, $password);

		$user = $this->model->get_loggedUser($email,$password);
		$this->set_session($user[0]);
			
		redirect("candidateInsert/get_insertBasic");

	}

	public function view_login() {
		
		$this->load->view("login");

	}


	public function get_logged_user() {
		
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		$user = $this->model->get_loggedUser($email,$password);
			
		if(count($user) == 1) {

			$this->set_session($user[0]);
			redirect("candidateView/get_mainProfile");

		} else {
			
			$this->view_login();

		}

		
	}

	public function logout() {
		
		$id = $this->session->sess_destroy();

		redirect("candidate/");

	}

	private function set_session($user) {
		
		$this->session->set_userdata('id',$user['user_id']);
		$this->session->set_userdata('name',$user['email']);

	}


	
}