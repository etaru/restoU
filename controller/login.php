<!--Login controller-->
<?php
	
	//get information of model
	include_once('../model/login.php');

	if(isset($_POST["email"]) && isset($_POST["password"])) {

		//cookie names
		$cookieEmail="connected";
		//$cookieAdmin="admin";

		//retrieve information of form
		$email=$_POST['email'];
		$password=sha1($_POST['password']);

		/*retrieve admins from database
		$admins=LOGIN::isAdmin($email);
		foreach ($admins as $admin) {
			$isadmin=$admin["admin"];
		}*/

		$users=LOGIN::loggedin($email,$password);

		if($users[0]==1) {
			include_once("../view/loginFail.php");	
		}
		else {
			//cookie values
			$cookieEmailValue=$email;
			//$cookieAdminValue=$isadmin;

			//cookie creation, duration of 30min (true attribute is for httponly)
			setcookie($cookieEmail, $cookieEmailValue, time()+1800, "/", null, false, true);
			//setcookie($cookieAdmin, $cookieAdminValue, time()+1800, "/", null, false, true);

			include_once("../view/index.php");
		}
	}
	else {
		include_once("../view/login.php");
	}