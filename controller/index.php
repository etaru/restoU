<!--Index controller-->
<?php
	
	//get information of model
	require_once('../model/index.php');
	require_once('../model/like.php');

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

    	$tab=array(
	    	'meal' => $meal[0]
		);
	}

	$likes=LIKE::getLikes($tab);

	foreach ($likes as $like) {
		$likeCounter[]=$like['likeCounter'];
	}

	include_once("../view/index.php");

?>