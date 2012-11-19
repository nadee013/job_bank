<?php 


class Common extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$this->load->database();

		$this->load->helper("url");
		$this->load->helper("form");

		$this->load->library("input");

		$this->load->model("COMMON_MODEL", "model");
		$this->load->view("header");

	}

	public function index() {
		
		//$this->load->view("log_button");
		$this->get_insertUser();
		//$this->load->view("footer");
		

	}

	public function get_login() {

		
		$this->load->view("login");
		$this->load->view("footer");
	}


	public function get_insertUser() {

		$this->load->view("registration");	


		
	}

	public function do_insertUser() {

		$this->load->library('form_validation');
		$user_type = $this->input->post("type");
		//$this->load->view("log_button");

		if($user_type == "candidate") {
			$email_db_field = "candidate_user.email";

		} else {
			$email_db_field = "company_user.email";

		}

		$this->form_validation->set_rules('email', 'Email', "required|valid_email|is_unique[$email_db_field]");
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('c_password', 'Confirm Password', 'required|matches[password]');

		if($this->form_validation->run()) {
			
			$email = $this->input->post("email");
			$password = $this->input->post("password");

			if($user_type == "candidate") {

				$this->model->insertUser_candidate($email, $password);

				$user = $this->model->get_loggedCan($email,$password);
				$this->set_session($user[0], NULL);
				
				redirect("candidateInsert/get_insertBasic");

			} else if ($user_type == "employer") {

				$this->model->insertUser_company($email, $password);

				$user = $this->model->get_loggedCom($email,$password);
				$this->set_session($user[0], NULL);
				
				redirect("company_insert/get_insert_profile");

			}

	
		} else {

			$this->get_insertUser();
			$this->load->view("footer");
		}
	}

	public function view_login() {
		
		$this->load->view("login");
		$this->load->view("footer");

	}


	public function get_logged_user() {

		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if($this->form_validation->run()) {
			
			$email = $this->input->post("email");
			$password = $this->input->post("password");
			$user_type = $this->input->post("type");

				if($user_type == "candidate") {

					$user = $this->model->get_loggedCan($email,$password);
					
						if(count($user) == 1) {

							$this->set_session($user[0], "candidate" );
							redirect("candidateView/get_mainProfile");

						} else {

							$this->view_login();
						
						}

				} else if($user_type == "employer") {
				
					$user = $this->model->get_loggedCom($email,$password);
						
						if(count($user) == 1) {

							$this->set_session($user[0], "employer");
							redirect("company_vw_edt/view_company_profile");
						
						} else {

							$this->view_login();
						}

				} 

		} else {

			$this->view_login();
		}
		
		
	}

	public function logout() {
		
		$id = $this->session->sess_destroy();

		redirect("common/");

	}

	public function login() {

		$this->load->view("login");
	}

	private function set_session($user, $type) {
		
		$this->session->set_userdata('id',$user['user_id']);
		$this->session->set_userdata('name',$user['email']);
		$this->session->set_userdata('type', $type);

	}



	
}