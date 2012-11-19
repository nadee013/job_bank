<?php 

class Company_insert extends CI_Controller {


	public function __construct() {
		
		parent::__construct();

		$this->load->database();

		$this->load->helper("form");

		$this->load->library("input");

		$this->load->model("company_insert_model","model");

		$this->load->view("header");
		$this->load->view("logout");

	}

	public function get_insert_profile() {
		
		$this->load->view("company/insert/company_profile");
		$this->load->view("footer");
	}

	public function do_insert_profile() {

		$this->load->library("form_validation");

		$this->form_validation->set_rules('industry', 'Industry', 'required');
		$this->form_validation->set_rules('company_name', 'Company Name', 'required');
		$this->form_validation->set_rules('add1', 'PO Box No', 'required');
		$this->form_validation->set_rules('add2', 'Town name', 'required');
		$this->form_validation->set_rules('tp', 'Telephone Number', 'required');

		if($this->form_validation->run()) { 

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
			$web = $this->input->post("web");

			$filename = $_FILES['logo']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);

			if($filename) {

				$logoFilename = md5(rand() . "_" . time()) . ".$ext";
				$path = "logo/$logoFilename";

				$this->load->library('upload');
				move_uploaded_file($_FILES["logo"]["tmp_name"], $path);
				echo $path;


			} else {

				$path = "";
			}
			
			
			
			$this->model->insert_profile($user_id, $industry, $company_name, $address, $district, $country, $tp, $fax, $path, $web);

			redirect("company_insert/get_payment_details");
		} else {

			$this->get_insert_profile();
		}
	
	}

	public function get_payment_details() {
		
		$this->load->view("company/insert/payment");;
		$this->load->view("footer");

	}

	
	public function do_insert_pdetails() {

		$user_id = $this->session->userdata('id');
		$plan = $this->input->post("plan");
		$payment = $this->input->post("payment");

		$this->session->set_userdata("type", "employer");

		$this->model->insert_payment($user_id, $plan, $payment);

		redirect("company_vw_edt/view_company_profile");
	}

}

