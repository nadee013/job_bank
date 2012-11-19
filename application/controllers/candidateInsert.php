
<?php

class CandidateInsert extends CI_Controller {


	public function __construct() {

		parent::__construct();

		$this->load->database();

		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->helper("file");

		$this->load->library("input");

		$this->load->model("candidateInsert_model", "can_model");
		$this->load->model("candidateView_model", "model");

		$this->load->view("header");
		$this->load->view("logout");

	}

	public function index() {


		$this->get_insertCandidateUser();
		$this->load->view("login.php");
	
	}


	public function get_insertBasic() {

		
		$this->load->view("candidate/insert/personal_details");
		$this->load->view("footer");
	}


	public function do_insertBasic() {

		$this->load->library("form_validation");

		$this->form_validation->set_rules('f_name', 'First name', 'required');
		$this->form_validation->set_rules('l_name', 'Last Name', 'required');
		$this->form_validation->set_rules('nic', 'National ID number', 'required|is_unique[candidate_basicinfo.nic_no]');

		if($this->form_validation->run()) {

			$user_id = $this->session->userdata('id');
			$title = $this->input->post("title");
			$f_name = $this->input->post("f_name");
			$l_name = $this->input->post("l_name");
			$nic = $this->input->post("nic");
			$dt = $this->input->post("dt");
			$mnth = $this->input->post("mnth");
			$yr = $this->input->post("yr");
			$dob = $yr . "-" . $mnth . "-" . $dt;
			$dob_int = strtotime("$dob");
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
			$filename_cv = $_FILES['upload_cv']['name'];

			$this->load->library('upload');

			if($filename_pic) {

				$ext = pathinfo($filename_pic, PATHINFO_EXTENSION);
				$picFilename = md5(rand() . "_" . time()) . ".$ext";
				$pic = "uploads/$picFilename";
				move_uploaded_file($_FILES["pic"]["tmp_name"], $pic);
			
			} else {

				$pic = "uploads/profile_pic.jpg";
			}

			if($filename_cv) {

				$cvFilename = md5(rand() . "_" . time()) . ".pdf";
				$cv = "cv/$cvFilename";
				move_uploaded_file($_FILES["upload_cv"]["tmp_name"], $cv);

			} else {

				$cv = "";
			}
			
		
			$this->can_model->insertBasic($user_id, $title, $pic, $f_name, $l_name, $dob_int, $gender, $status, $address, $district, $country, $nationality, $mobile, $home,  $nic, $cv);

			redirect(site_url("candidateInsert/get_inserteduQuali"));


		} else {

			$this->get_insertBasic();

		}

		
	}

	public function get_inserteduQuali() {

		$this->load->view("candidate/insert/edu_quali");
		$this->load->view("footer");

	}

	public function do_inserteduQuali_ol() {


		$user_id = $this->session->userdata('id');
		$o_school = $this->input->post("o_school");
		$o_index = $this->input->post("o_index");
		$o_yr = $this->input->post("o_yr");
		$o_medium = $this->input->post("o_medium");
		$o_subject = $this->input->post("o_subject");
		$o_grade = $this->input->post("o_grade");

		$user_id = $this->session->userdata('id');
		$a_school = $this->input->post("a_school");
		$a_index = $this->input->post("a_index");
		$a_yr = $this->input->post("a_year");
		$a_medium = $this->input->post("a_medium");
		$a_stream = $this->input->post("a_stream");
		$al_subject = $this->input->post("al_subject");
		$a_grade = $this->input->post("a_grade");


		for($i = 0; $i<count($o_subject); $i++) {

			$this->can_model->insertEduQuali_ol($user_id, $o_index, $o_school, $o_yr, $o_medium, $o_subject[$i], $o_grade[$i]);

		}

		for($i = 0; $i < count($al_subject); $i++) {

			$this->can_model->insertEduQuali_al($user_id, $a_index, $a_school, $a_yr, $a_medium, $a_stream, $al_subject[$i], $a_grade[$i]);

		}

		redirect("candidateInsert/get_insertHigherEdu");
	}


	

	public function get_insertHigherEdu() {
		
		$this->load->view("candidate/insert/higher_edu");
		$this->load->view("footer");

	}


	public function do_insertHigherEdu() {
		
		$user_id = $this->session->userdata('id');
		$uni = $this->input->post("uni");
		$level = $this->input->post("level");
		$desc = $this->input->post("description");
		$yr = $this->input->post("yr");

		$this->can_model->insertHigherEdu($user_id, $uni, $level, $desc, $yr);

		redirect("candidateInsert/get_insertSports");

	}


	public function get_insertSports() {
	
		$this->load->view("candidate/insert/sports");
		$this->load->view("Footer");

	}


	public function do_insertSports() {	
		
		$user_id = $this->session->userdata('id');
		$sport = $this->input->post("sport");
		$description = $this->input->post("description");
		$achvmnt = $this->input->post("achivement");
		$yr = $this->input->post("year");

		$this->session->set_userdata("type", "candidate");

		$this->can_model->insertSports($user_id, $sport, $description, $achvmnt, $yr);

		redirect("candidateView/get_mainProfile");
	}



}