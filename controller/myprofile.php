<!--Myprofile controller-->
<?php
	
	//get information of model
	include_once('../model/myprofile.php');

	$infos=INFO::getInfo();

	foreach ($infos as $info) {
		if ($info['email'] == $_COOKIE['connected']){
        	$firstName=$info['firstName'];
        	$lastName=$info['lastName'];
        	$email=$info['email'];
        	$password=$info['password'];
        	$admin=$info['admin'];
      }
	}

	if ($admin==1) {
		$isAdmin='YES';
	}
	else {
		$isAdmin='NO';
	}

	include_once('../view/Myprofile.php');