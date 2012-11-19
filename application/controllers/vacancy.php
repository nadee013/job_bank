 <?php 

class Vacancy extends CI_Controller {


	public function __construct() {
		
		parent::__construct();

		$this->load->database();

		$this->load->helper("form");

		$this->load->library("input");

		$this->load->model("vacancy_search_model", "search");
		$this->load->model("vacancy_model", "vacancy");
		$this->load->model("email_model", "email");
	
	}


	public function get_schedule_data() {

		$this->load->view("header");
		$this->load->view("logout");

		$this->load->view("vacancy/company/insert/schedule_data");
		$this->load->view("footer");
	
	}


	public function insert_schedule_data() {

		$cmpny_id =  $this->session->userdata('id');
		$position = $this->input->post("position");
		$job_desc = $this->input->post("job_desc");
		$msg = $this->input->post("msg");
		$interview_due = $this->input->post("due");

		//$this->set_session($position);

		$time_slots = $this->time_slot_convert_json();
		
		$vacancy_id = $this->vacancy->insert_schedule_data($cmpny_id, $position, $job_desc, $msg, $interview_due,$time_slots);
	
		redirect("vacancy/get_vacancy_search/$vacancy_id");

	}


	public function time_slot_convert_json() {
		
		$start_date = $this->input->post("s_date");
		$end_date = $this->input->post("e_date");
		$start_time = $this->input->post("s_time");
		$end_time = $this->input->post("e_time");

		for($lc=0; $lc<count($start_date); $lc++) {

			$st = strtotime($start_date[$lc] . " " . $start_time[$lc]);
			$et = strtotime($end_date[$lc] . " " . $end_time[$lc]);

			$time_slots = array();	
			array_push($time_slots, array("st" => $st, "et" => $et));
		}

		$db_string = json_encode($time_slots);
		return $db_string;
	
	}



	public function get_vacancy_search($vacancy_id) {

		$this->load->view("header");
		$this->load->view("logout");

		$data = array("vacancy_id" => $vacancy_id);
		
		$this->load->view("vacancy/company/insert/vacancy_search", $data);
		$this->load->view("footer");
	
	}
	

	public function do_search_vacancy($vacancy_id) {

		$this->load->view("header");
		$this->load->view("logout");

		
		$user_id = $this->session->userdata('id');
		$designation = $this->input->post("position");
		$gender = $this->input->post("gender");
		$age1 = $this->input->post("age1");
		$age2 = $this->input->post("age2");
		$location = $this->input->post("location");
		$m_quali = $this->input->post("m_quali");
		
		$ol_subject = $this->input->post("ol_subject");
		$ol_grade = $this->input->post("ol_grade");

		$stream = $this->input->post("stream");
		$al_subject = $this->input->post("al_subject");
		$al_grade = $this->input->post("al_grade");

		//$this->model->insert_vacancy($user_id, $designation, $gender, $age1, $age2, $location, $m_quali, $ol_subject, $ol_grade);

		if ($location != "Any Location") {

			$this->search->location($location);
			
		}

		if($gender != "both") {

			$this->search->gender($gender);
		}

		if($age1 != "Select Age") {

			$this->search->from_age($age1);

		}

		if($age2 != "Select Age") {

			$this->search->to_age($age2);
		}
		

		for($i=0; $i < count($ol_subject); $i++) {

			if($ol_subject[$i] != "Select Subject") {

				$this->search->ol_subject($ol_subject[$i], $ol_grade[$i]);
			}
			

		}

		if($stream && $stream != "Select Stream") {

			$this->search->al_stream($stream);
		}
		
		for($i=0; $i<count($al_subject); $i++) {

			if($al_subject[$i] != "Select Subject") {

				$this->search->al_subject($al_subject[$i], $al_grade[$i]);

			}
			

		}

		$vacancy_id = $this->uri->rsegment(3);
		$users = $this->search->search($vacancy_id);

		$vacancy_name = $this->search->get_vacancy_name($vacancy_id);

		$row = array("users" => $users, "position" => $vacancy_name);
		//print_r($row);
		if($row['users']) {
		 
			$this->load->view("vacancy/company/view/candidate_list.php", $row);
			$this->load->view("footer");
		}

		

	}


	public function invite_or_download($vacancy) {

		$download = $this->input->post("download");
		$invite = $this->input->post("invite");
		$vacancy_id = $vacancy;

		if($download) {

			$this->download_csv();

		} else if($invite) {

			$this->do_insert_invited_candidates_to_db($vacancy_id);
			$this->invite_by_email();
			$this->vacancy_data_load($vacancy_id);

		}
		
	}


	public function invite_by_email() {


		$from = $this->get_email_from();
	
		$to = $this->get_email_to();
		// print_r($to);
		$vacancy_id = $this->uri->rsegment(3);

		$title = $this->get_email_title($vacancy_id);
		// echo "<br/>";
		// echo $title;
		
		$msg = $this->get_email_body();
		// echo $msg;
		// echo "<br/>";
		// echo count($to);

		for($i = 0; $i < count($to); $i++) {

			$email_to = $to[$i];
			$this->email->send($from, $email_to, $title, $msg);
			//print_r($to[$i]);

		}
		
	}


	public function get_email_from() {

		$company_id = $this->session->userdata('id');
		$from_email = $this->email->get_inviting_company_email($company_id);
		return $from_email[0]["email"];
	
	}


	public function get_email_to() {

		$company_id = $this->session->userdata('id');

		$vacancy_id = $this->uri->rsegment(3); 

		$candidate_ids = $this->email->get_inviting_candidates_ids($company_id, $vacancy_id);
		// echo "<br/>";
		// print_r($candidate_ids);
		if($candidate_ids) {

			$can_email = array();

			foreach ($candidate_ids as $candidate_id => $row) {
				
				array_push($can_email, $row['candidate_id']);

			}

			$candidate_emails = $this->email->get_inviting_candidates_emails($can_email);
		
			$email_adds = array();

			foreach ($candidate_emails as $email => $row) {
				
				array_push($email_adds, $row['email']);
			}
			return $email_adds;
		}
	
	}


	public function get_email_title($vacancy_id) {

		$position_name = $this->email->get_vacancy_name($vacancy_id);
		$position = "Vacancy header";

		foreach ($position_name as $position) {
			
			$position = $position["position"];
		}

		return "Interview for the post of $position";
	
	}


	public function get_email_body() {
		
		$company_id = $this->session->userdata('id');
		$vacancy_id = $this->uri->rsegment(3);
		$email_db_body = $this->email->get_email_body_from_db($company_id, $vacancy_id);
		
		foreach ($email_db_body as $body) {
			
			return $body["msg"];
		}

	}


	public function do_insert_invited_candidates_to_db($vacancy) {


		$cmpny_id = $this->session->userdata('id');
		$check = $this->input->post("check");
		$vacancy_id = $vacancy;

		if(isset($check[0])) {

			foreach ($check as $candi) {
				
				$candidate_id = $candi;
				$this->vacancy->insert_candidates_of_the_post($vacancy_id, $cmpny_id, $candidate_id);

			}

			
		}
	
	}

	public function download_cvs_for_vacancy($vacancy_id) {

		/* 
			1. vacancy id 1ta adala usersla tikage basic info oona.
			2. candi_list_csv view ekata danna oona.
		

		*/

		$candidates = $this->vacancy->get_all_candidates_for_vacancy($vacancy_id);
		//print_r($candidates);
		$data = array("users" => $candidates);

		$this->load->view("vacancy/company/view/candi_list_csv", $data);
		
	}

	
	public function download_csv() {


		$check = $this->input->post("check");

		// print_r(isset($check[0]));

		if(isset($check[0])) {

			$users = $this->search->download_cv($check);
			//print_r();
			
			$data = array("users" => $users);

			$this->load->view("vacancy/company/view/candi_list_csv", $data);

		} else {

			$this->load->view("header");
			$this->load->view("logout");

			$this->load->view("vacancy/company/view/download_candidate_null");
			$this->load->view("footer");
		}
		
	}

	private function set_session($position, $vacancy_id) {
		
		$this->session->set_userdata('position', $position);
		$this->session->set_userdata('vacancy', $vacancy_id);

	}


	public function vacancy_data_load($vacancy_id, $action = NULL) {

		$this->load->view("header");
		$this->load->view("logout");

		//$vacancy_id = $this->session->userdata('vacancy');

		$vacancy_data = $this->vacancy->get_vacancy_data_load($vacancy_id, $action);
		$vacancy_name = $this->search->get_vacancy_name($vacancy_id);

		//print_r($vacancy_data);
		// echo"<br/>";
		if($vacancy_data) {

			$can = array();

			foreach ($vacancy_data as $candidate_id => $row) {
				
				array_push($can, $row['candidate_id']);

			}

			$candidates = $this->vacancy->get_candidate_detail($can);

			$candidate_list = array("candidates" => $candidates, "position" => $vacancy_name);
			//print_r($candidate_list);

			$this->load->view("vacancy/company/view/main_vacancy_page", $candidate_list);

		} else {

			if(!$action) {
				// database eke kawrut nattam
				redirect("vacancy/get_vacancy_search/$vacancy_id");
			} else {
				//

				$candidate_list = array("candidates" => array(), "position" => $vacancy_name);
				$this->load->view("vacancy/company/view/main_vacancy_page", $candidate_list);

			}

		}

			
		$this->load->view("footer");
			
	}


	
}
