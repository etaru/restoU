<!--Index controller-->
<?php
	
	//get information of model
	include_once('../model/index.php');

	$rooms=INDEX::getRoom();

	foreach ($rooms as $room) {
    	$name[]=$room['name'];
    	$statusNoon[]=$room['statusNoon'];
    	$statusEvening[]=$room['statusEvening'];
	}

	include_once("../view/index.php");
