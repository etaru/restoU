<!--Login controller-->
<?php
	
	//get information of model
	include_once('../model/login.php');

	if(isset($_POST["email"]) && isset($_POST["password"])) {

		//cookie name
		$cookieEmail="connected";

		//retrieve information of form
		$email=htmlspecialchars($_POST['email']);
		$password=sha1($_POST['password']);

		$tab=array('email' => $email,);
		
        $data=LOGIN::loggedin($tab);

        if ($data['password'] == $password) {

			//cookie values
			$cookieEmailValue=$email;

			//cookie creation, duration of 30min (true attribute is for httponly)
			setcookie($cookieEmail, $cookieEmailValue, time()+1800, "/", null, false, true);

			include_once("../controller/index.php");	
		}
		else {
			include_once("../view/loginFail.php");
		}
	}
	else {
		include_once("../view/login.php");
	}