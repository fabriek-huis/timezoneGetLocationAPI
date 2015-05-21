<?php

//usage: /?timezone=Europe/Prague
//output(JSON): {"country_code":"CZ","latitude":50.08333,"longitude":14.43333,"comments":""}

if(isset($_GET['timezone'])) {
	
	$timezone = $_GET['timezone'];
	
	try {
		
		$timezone = new DateTimeZone($timezone);
		output(timezone_location_get($timezone));
		
	} catch(Exception $error) {
		output(array('error' => 'bad timezone')); //or add $error for full message 
	}
}

function output($data){
	echo json_encode($data);
}

?>