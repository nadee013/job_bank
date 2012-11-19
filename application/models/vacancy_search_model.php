
<?php

class Vacancy_search_model extends CI_Model {


	var $basic = array("gender" => null, "district" => null, "from_age" => null, "to_age" => null);
	var $ol = array();
	var $al = array();
	var $stream = null;

	public function location($location) {
		
		$this->basic['district'] = $location;

	}

	public function gender($gender) {
		
		$this->basic['gender'] = $gender;
	
	}

	public function from_age($age1) {

		$from_age_in_sec = $age1 * (365 * 24 * 60 * 60);
		$this->basic['from_age'] = time() - $from_age_in_sec;	
	
	}


	public function to_age($age1) {

		$to_age_in_sec = $age1 * (365 * 24 * 60 * 60);
		$this->basic['to_age'] = time() - $to_age_in_sec;	
	
	}


	public function ol_subject($subject, $grade) {

		$this->ol[$subject] = $grade;
	
	}

	public function al_subject($subject, $grade) {
		
		$this->al[$subject] = $grade;
	
	}

	public function al_stream($stream) {
		
		$this->stream = $stream;
	}

	public function search($vacancy_id) {


		$from = $this->get_from();
		$where = $this->get_where();

		$sql = "SELECT DISTINCT c.user_id, c.f_name, c.l_name FROM $from";

		if($where) { 
			$vacancy_existing_removal = " c.user_id NOT IN (SELECT candidate_id FROM candidates_for_vacancy WHERE vacancy_id = $vacancy_id)";
			$sql .= " WHERE $vacancy_existing_removal AND $where";
			$result = $this->db->query($sql)->result_array();
			return $result;
		} else {
			return null;
		} 
		echo $sql;
		//echo "</br>";
		
		//print_r($result);
		//echo "</br>";
		//print_r($result);

	}


	private function get_from() {

		$from = "candidate_basicinfo c";

		if(count($this->ol) > 0) {

			$from .= ", ol o";
		}

		if(count($this->al) > 0) {

			$from .= ", al a";
		}

		return $from;

	}

	private function get_where() {

		$join = $this->get_join();
		$basic = $this->get_where_basic();
		$ol = $this->get_where_ol();
		$al = $this->get_where_al();

		$where = "";
		if($join) $where .= "($join) AND ";
		if($basic) $where .= "($basic) AND ";
		if($ol) $where .= "c.user_id IN($ol) AND ";
		if($al) $where .= "c.user_id IN($al) AND ";

		if($where) {
			$where = substr($where, 0, -4);
		}

		return $where;

	}

	private function get_join() {

		$join = array();


		if(count($this->ol) > 0) {

			array_push($join, "c.user_id = o.user_id");
		}

		if(count($this->al) > 0) {

			array_push($join, "c.user_id = a.user_id");
		}

		return (count($join)>0)? implode(" AND ", $join) : null;

	}


	private function get_where_basic() {

		$where = array();

		foreach($this->basic as $key => $value) {

			if($value) {

				switch ($key) {
					case 'from_age':
						array_push($where, "c.dob < $value");
						break;
					case 'to_age':
						array_push($where, "c.dob > $value");
						break;
					
					default:
						array_push($where, "c.$key = '$value'");

						break;
				}
			}
		}

		return implode(" AND ", $where);

	}

	private function get_where_ol() {

		if(count($this->ol) > 0) {

			$where = array();

			foreach($this->ol as $key => $value) {

				array_push($where, "subject = '$key' AND grade = '$value'");
			}

			$where_clause = "(" . implode(") OR (", $where) . ")";
			$cnt = count($this->ol);

			//echo "<br>$where_clause<br>";

			return "SELECT user_id FROM `ol` WHERE $where_clause GROUP BY user_id Having count(*) = $cnt";
		} else {
			
			return "";
		}

		//SELECT user_id FROM `ol` WHERE (`subject` = 'English' AND `grade` = 'B') OR (`subject` = 'SINHALA' AND grade = 'F')  GROUP BY user_id Having count(*) = 2(`subject` = 'English' AND `grade` = 'B') OR (`subject` = 'SINHALA' AND grade = 'F')  GROUP BY user_id Having count(*) = 2
	}

	private function get_where_al() {

		if(count($this->al) > 0) {

			$where = array();

			foreach($this->al as $key => $value) {

				array_push($where, "subject = '$key' AND grade = '$value'");
			}

			$where_clause = "(" . implode(") OR (", $where) . ")";
			$cnt = count($this->al);
			//echo "<br>$where_clause<br>";
			

			return "SELECT user_id FROM `al` WHERE $where_clause GROUP BY user_id Having count(*) = $cnt";
		
		} else if($this->stream) {

			$stream = $this->stream;
			return "SELECT user_id FROM `al` WHERE stream = '$stream'";
		
		} else {
		 	return "";
		}

	}


	public function download_cv($user_ids) {

		$list = implode(",", $user_ids);

		$sql = "SELECT * FROM candidate_basicinfo WHERE user_id IN ($list)"; 

		return $this->db->query($sql)->result_array();
		
	}

	public function get_vacancy_name($vacancy_id) {

		$sql = "SELECT position, action FROM vacancy WHERE vacancy_id = $vacancy_id";
		$vacancy_name = $this->db->query($sql)->result_array();
		return $vacancy_name;
		
	}

}