<!--Myprofile controller-->
<?php
	
	//get information of model
	include_once('../model/myprofile.php');

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

		include_once('../view/myprofile.php');
	}
	else {
    	include_once('../controller/login.php');
 	 }