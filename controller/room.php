<!--Room controller-->
<?php
	
	//get information of model
	include_once('../model/room.php');

	if (isset($_COOKIE['connected'])) {
   
	    include_once('../model/login.php');

	    //retrieves users
	    $users=LOGIN::userEmail();

	    //set email to right user
	    foreach ($users as $user) {

	      if ($user['email'] == $_COOKIE['connected']) {
	        $email=$user['email'];
	      }

	    }
	  
	    //retrieve admins
	    $admins=LOGIN::isAdmin($email);

	    //set admin variable to user
	    foreach ($admins as $admin) {
	      $isadmin=$admin["admin"];
	    }

		$rooms=ROOM::getRoom();

		foreach ($rooms as $room) {
	    	$name=$room['name'];
	    	$statusNoon=$room['statusNoon'];
		}

		include_once('../view/room.php');
	}
	else {
		include_once('../controller/login.php');
	}