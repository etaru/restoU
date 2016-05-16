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

	$meals=INDEX::getMenu();

	foreach ($meals as $meal) {
    	$contentNoon[]=$meal['contentNoon'];
    	$contentEvening[]=$meal['contentEvening'];
    	$likeCounter[]=$meal['likeCounter'];
    	$idM[]=$meal['idM'];
	}

	include_once("../view/index.php");

?>