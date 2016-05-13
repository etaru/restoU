<!--Signup controller-->
<?php

	//get information of model
	include_once('../model/signup.php');
	
	if(isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["password"])) {

		//get information from the form
		$firstName = htmlspecialchars($_POST['firstName']);
		$lastName = htmlspecialchars($_POST['lastName']);
		$email = htmlspecialchars($_POST['email']);
		$password = sha1(htmlspecialchars($_POST['password']));
		$verifPassword= sha1(htmlspecialchars($_POST['verifPassword']));

		//retrieve email address
		$emails=SIGNUP::verifUser($email);

		//if any field is empty -> redirection
		if (empty($firstName)||empty($lastName)||empty($email)||empty($password)||empty($verifPassword)) {
			include('../view/signupIncomplete.php');
		}
		//if confirmation of password is incorrect -> redirection
		elseif ($password!=$verifPassword) {
			include('../view/signupVerifPassword.php');
		}
		//if user already registered -> redirection
		elseif(!empty($emails)) {
			include('../view/signupFail.php');
		}
		//this case is when everything is OK -> add user to database
		else {
			SIGNUP::addUser($firstName, $lastName, $email, $password);

		include('../view/signupSuccess.php');
		}
	}
	else {
		include_once("../view/signup.php");
	}