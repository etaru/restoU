<!--Signup controller-->
<?php

	//get information of model
	require_once('../model/signup.php');
	
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
		header('Location: ../view/signupIncomplete.php');
	}
	//if confirmation of password is incorrect -> redirection
	elseif ($password!=$verifPassword) {
		header('Location: ../view/signupVerifPassword.php');
	}
	//if user already registered -> redirection
	elseif(!empty($emails)) {
		header('Location: ../view/signupFail.php');
	}
	//this case is when everything is OK -> add user to database
	else {
		SIGNUP::addUser($firstName, $lastName, $email, $password);

	header('Location: ../view/signupSuccess.php');
	}