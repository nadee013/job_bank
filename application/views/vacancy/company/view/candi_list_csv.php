<?php 
	header("Content-Type: application/csv");
	header("Content-Disposition: attachment; filename=candidate_contact_list.csv"); 
?>
First Name, Last Name, Home TP, Mobile
<?php foreach($users as $user) {

	echo "{$user["f_name"]}, {$user["l_name"]}, {$user["tp_hm"]}, {$user["tp_mobile"]}\r\n";

} ?>