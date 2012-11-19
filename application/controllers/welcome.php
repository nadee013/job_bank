<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function json_code() {
		
		$time_slots = array();	
		array_push($time_slots, array("st" => 1, "et" => 2));
		array_push($time_slots, array("st" => 3, "et" => 4));

		//db ekata dana eka
		$db_string = json_encode($time_slots);
		//db eken ganna eka
		$decode = json_decode($db_string, true);

		echo $decode[1]["et"];
	}

	public function email() {

		

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('nadee@kodeincloud.com'); // change it to yours
		$this->email->to('nadee013@gmail.com'); // change it to yours
		$this->email->subject('Testing email.');
		$this->email->message('what ever ! !');

		if($this->email->send()) {
			echo 'Email sent.';
		} else {
			show_error($this->email->print_debugger());
		}
	}
}

