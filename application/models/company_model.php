
<?php

class Company_model extends CI_Model {

	public function insertCompanyDetails($industry, $company_name, $address, $district, $country, $tp, $fax, $logo, $web) {
		
		$sql = "INSERT INTO company(industry, cmpny_name, address, district, country, tp, fax, logo, web_url) VALUES('$industry', '$company_name', '$address', '$district', '$country', '$tp', '$fax', '$logo', '$web')";
		$this->db->query($sql);
	}
}