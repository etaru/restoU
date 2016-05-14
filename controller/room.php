<!--Room controller-->
<?php
	
	//get information of model
	include_once('../model/room.php');

	$rooms=ROOM::getRoom();

	foreach ($rooms as $room) {
    	$name=$room['name'];
    	$statusNoon=$room['statusNoon'];
    	$statusEvening=$room['statusEvening'];

	}

	include_once('../view/room.php');