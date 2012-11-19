
<?php

class Company extends CI_Controller {

	public function __construct()	{
	
		parent::__construct();

		$this->load->database();
		$this->load->helper("form");
		$this->load->library("input");
		$this->load->model("common_model", "model");
		$this->load->model("company_vw_edt_model", "vw_model");
	}


	public function get_profile() {
		
		$this->load->view("company/company_profile");

	}

	public function do_insertProfile() {

		$industry = $this->input->post("industry");
		$company_name = $this->input->post("company_name");
		$add1 = $this->input->post("add1");
		$add2= $this->input->post("add2");
		$add3 = $this->input->post("add3");
		$address = $add1 . "," . $add2 . "," . $add3;
		$district = $this->input->post("district");
		$country = $this->input->post("country");
		$tp = $this->input->post("tp");
		$fax = $this->input->post("fax");
		$logo = $this->input->post("logo");
		$web = $this->input->post("web");

		$this->model->insertCompanyDetails($industry, $company_name, $address, $district, $country, $tp, $fax, $logo, $web);

	}


	public function get_paymentDetails() {

		$this->load->view("company/payment");

	}

	public function view_profile() {

		$this->load->view("company/profile_view");

	}

	public function vacancy_details() {

		$this->load->view("company/vacancy_details");

	}

	public function candidate_list() { 

		$this->load->view("company/view/candidate_list");
	}

	

	public function interview_schedule() { 

		$this->load->view("company/interview_schedule");
	}
	
	public function download_csv() {

		$check = $this->input->post("check");

		// print_r(isset($check[0]));

		if(isset($check[0])) {

			$users = $this->vw_model->download_cv($check);
			//print_r();
			header("Content-Type: application/csv");
			header("Content-Disposition: attachment; filename=candidate_contact_list.csv");
			$data = array("users" => $users);

			$this->load->view("company/view/candi_list_csv", $data);

		} else {

			echo "Select at least one candidate";
		}

		
	}
}