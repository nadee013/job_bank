<?php

class CandidateEdit extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$this->load->database();

		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->helper("file");

		$this->load->library("input");

		$this->load->model("candidateEdit_model", "model");
		$this->load->model("candidateView_model", "can_model");
		$this->load->model("candidateInsert_model", "insert_model");

		$this->load->view("header");

	}

	public function view_basicinfo() {

		$user_id = $this->session->userdata('id');
		$basicinfo = $this->can_model->get_basicinfo($user_id);

		$row = array("basicinfo" => $basicinfo);
		$this->load->view("candidate/edit/basic_info", $row);

		$this->load->view("footer");

	}

	public function edit_basicinfo() {

		$user_id = $this->session->userdata('id');
		$title = $this->input->post("title");
		$f_name = $this->input->post("f_name");
		$l_name = $this->input->post("l_name");
		$nic = $this->input->post("nic");
		$dt = $this->input->post("dt");
		$mnth = $this->input->post("mnth");
		$yr = $this->input->post("yr");
		$dob = $yr . "-" . $mnth . "-" . $dt;
		$dob_in_sec = strtotime($dob);
		$gender = $this->input->post("gender");
		$status = $this->input->post("status");
		$add1 = $this->input->post("add1");
		$add2= $this->input->post("add2");
		$add3 = $this->input->post("add3");
		$address = $add1 . ", " . $add2 . ", " . $add3;
		$district = $this->input->post("district");
		$country = $this->input->post("country");
		$nationality = $this->input->post("nationality");
		$mobile = $this->input->post("mobile");
		$home = $this->input->post("home");

	
		$filename_pic = $_FILES['pic']['name'];

		$this->load->library('upload');

			if($filename_pic) {
				$ext = pathinfo($filename_pic, PATHINFO_EXTENSION);
				$picFilename = md5(rand() . "_" . time()) . ".$ext";
				$pic = "uploads/$picFilename";
				move_uploaded_file($_FILES["pic"]["tmp_name"], $pic);
			
			} else {

				$basicinfo = $this->can_model->get_basicinfo($user_id);
				$pic = $basicinfo[0]["pic"];
			}


		$this->model->edit_basicinfo($user_id, $title, $pic, $f_name, $l_name, $dob_in_sec, $gender, $status, $address, $district, $country, $nationality, $mobile, $home,  $nic);

		redirect(site_url("candidateView/index"));
	}

	public function view_eduquali_ol() {

		

		$user_id = $this->session->userdata('id');
		$ol = $this->can_model->get_eduquali_ol($user_id);

		$row = array("ol_results" => $ol);
		$this->load->view("candidate/edit/edu_quali_ol.php", $row);

		$this->load->view("footer");
	}

	public function edit_eduquali_ol() {
		
		$user_id = $this->session->userdata('id');
		$o_school = $this->input->post("o_school");
		$o_index = $this->input->post("o_index");
		$o_yr = $this->input->post("o_yr");
		$o_medium = $this->input->post("o_medium");
		$o_subject = $this->input->post("o_subject");
		$o_grade = $this->input->post("o_grade");

		$this->model->delete_ol($user_id);

		for($i = 0; $i < count($o_subject); $i++) {

			$this->insert_model->insertEduQuali_ol($user_id, $o_index, $o_school, $o_yr, $o_medium, $o_subject[$i], $o_grade[$i]);
		}
		

		redirect(site_url("candidateView/index"));


	}

	public function view_eduquali_al() {

	
		$user_id = $this->session->userdata('id');
		$al = $this->can_model->get_eduquali_al($user_id);

		$row = array("al_results" => $al);
		$this->load->view("candidate/edit/edu_quali_al.php", $row);

		$this->load->view("footer");
	}

	public function edit_eduquali_al() {
		
		$user_id = $this->session->userdata('id');
		$a_school = $this->input->post("a_school");
		$a_index = $this->input->post("a_index");
		$a_yr = $this->input->post("a_year");
		$a_medium = $this->input->post("a_medium");
		$a_stream = $this->input->post("a_stream");
		$a_subject = $this->input->post("a_subject");
		$a_grade = $this->input->post("a_grade");

		$this->model->delete_al($user_id);

		for($i = 0; $i < count($a_subject); $i++) {

			$this->insert_model->insertEduQuali_al($user_id, $a_index, $a_school, $a_stream, $a_yr, $a_medium, $a_subject[$i], $a_grade[$i]);	
		}


		

		redirect("candidateView/index");

	}

	public function view_higher_edu() {

		$user_id = $this->session->userdata('id');
		$higher = $this->can_model->get_higher_eduquali($user_id);

		$row = array("high" => $higher);
		$this->load->view("candidate/edit/higher.php", $row);

		$this->load->view("footer");
		
	}

	public function edit_higher_edu() {

		$user_id = $this->session->userdata('id');
		$uni = $this->input->post("uni");
		$level = $this->input->post("level");
		$description = $this->input->post("description");
		$yr = $this->input->post("yr");

		for($i=0; $i<count($uni); $i++) {}
		$this->model->edit_higher($user_id, $uni, $level, $description, $yr);

		redirect("candidateView/index");


	}

	public function view_sports() {

		$user_id = $this->session->userdata('id');
		$sports = $this->can_model->get_sports($user_id);

		$row = array("sport" => $sports);
		$this->load->view("candidate/edit/sports.php", $row);

		$this->load->view("footer");
		
	}

	public function edit_sports() {

		$user_id = $this->session->userdata('id');
		$sport = $this->input->post("sport");
		$description = $this->input->post("description");
		$achivement = $this->input->post("achivement");
		$year = $this->input->post("year");

		$this->model->edit_sport($user_id, $sport, $achivement, $description, $year);

		redirect("candidateView/index");


	}


	public function update_interview_confirmation($vacancy_id){

		$user_id = $this->session->userdata("id");

		$time_date_due = $this->model->get_vacancy_time_date_due($vacancy_id);
		
		$no_of_candidates = $this->model->get_number_of_candidates($vacancy_id);
		//print_r($time_date_due);

		$duration_in_sec = $time_date_due["interview_due"] * 60;
		$time_already_spent = $duration_in_sec * $no_of_candidates;
		//echo $time_already_spent;


		$time_slots_converted = json_decode($time_date_due["time_slots"], true);

		$interview_time = $time_slots_converted[0]["st"] + $time_already_spent;
		
		$this->model->accept_interview($vacancy_id, $user_id, $interview_time);

		/*
			get 1st time slot.
			get d number of candidates for the interview.
			get the duration.


		*/

		redirect("candidateView/view_vacancy_details/$vacancy_id");
	}


	public function update_interview_rejection($vacancy_id){

		$user_id = $this->session->userdata("id");
		$this->model->reject_interview($vacancy_id, $user_id);

		redirect("candidateView/view_vacancy_details/$vacancy_id");
	}
}