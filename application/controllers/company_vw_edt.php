<?php

class Company_vw_edt extends CI_Controller {


	public function __construct() {

		parent::__construct();

		$this->load->database();

		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->helper("file");

		$this->load->library("input");


		$this->load->model("company_vw_edt_model", "model");

		$this->load->view("header");
		//$this->load->view("logout");

			
	}

	public function view_company_profile() {

		$id = $this->session->userdata('id');
		$profile = $this->model->view_profile($id);

		$this->load->model("vacancy_model", "vacancy");

		$vacancies = $this->vacancy->get_vacancies($id);

		$row = array("profile" => $profile, "vacancy_detail" => $vacancies);

		if($row['profile']) {

			$this->load->view("company/view/profile_base", $row);
			$this->load->view("footer");


		} else {

			$this->load->view("company/insert/company_profile");
			$this->load->view("footer");
		}


	}

	public function view_profile() {

		$id = $this->session->userdata('id');
		$data = $this->model->view_profile($id);

		$row = array("profile" => $data);
		//print_r($row);
		$this->load->view("company/edit/profile_edit", $row);
		$this->load->view("footer");
	}


	public function edit_company() {

		$user_id = $this->session->userdata('id');
		$industry = $this->input->post("industry");
		$company_name = $this->input->post("company_name");
		$add1 = $this->input->post("add1");
		$add2 = $this->input->post("add2");
		$add3 = $this->input->post("add3");
		$address = $add1 . "," . $add2 . "," . $add3;
		$district = $this->input->post("district");
		$country = $this->input->post("country");
		$tp = $this->input->post("tp");
		$fax = $this->input->post("fax");
		//$logo = $this->input->post("logo");
		$web = $this->input->post("web");

		$filename = $_FILES['logo']['name'];

		$this->load->library("upload");

		if($filename) {
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$logoFilename = md5(rand() . "_" . time()) . ".$ext";
				$logo = "logo/$logoFilename";
				move_uploaded_file($_FILES["logo"]["tmp_name"], $logo);
			
		} else {

			$profile = $this->model->view_profile($user_id);
			$logo = $profile[0]["logo"];
			echo $logo;
		}

			

		$this->model->edit_companyDetails($user_id, $industry, $company_name, $address, $district, $country, $tp, $fax, $logo, $web);
		
		redirect("company_vw_edt/view_company_profile");
	}

	public function view_profile_for_company($company_id) {

		$company_details = $this->model->get_profile_data($company_id);

		$row = array("company_data" => $company_details);
		//print_r($row);

		$this->load->view("company/view/profile_for_candidate", $row);

		$this->load->view("footer");
		
	}
}