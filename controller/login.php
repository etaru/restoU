<!--Login controller-->
<?php

	//get information of model
	require_once('../model/login.php');

	//cookie names
	$cookieEmail="connected";
	$cookieAdmin="admin";

	//retrieve information of form
	$email=htmlspecialchars($_POST['email']);
	$password=sha1(htmlspecialchars($_POST['password']));

	//retrieve admins from database
	$admins=LOGIN::isAdmin($email);
	foreach ($admins as $admin) {
		$isadmin=$admin["admin"];
	}

	$users=LOGIN::loggedin($email,$password);

	if($users==1) {
		//cookie values
		$cookieEmailValue=$email;
		$cookieAdminValue=$isadmin;

		//cookie creation, duration of 30min (true attribute is for httponly)
		setcookie($cookieEmail, $cookieEmailValue, time()+1800, "/", null, false, true);
		setcookie($cookieAdmin, $cookieAdminValue, time()+1800, "/", null, false, true);

		header("Location: ../view/index.php");
		
	}
	else {
		header("Location: ../view/loginFail.php");
	}