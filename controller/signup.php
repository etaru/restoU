<?php

	require_once('../model/signup.php');
	
	$firstName = htmlspecialchars($_POST['firstName']);
	$lastName = htmlspecialchars($_POST['lastName']);
	$email = htmlspecialchars($_POST['email']);
	$password = sha1(htmlspecialchars($_POST['password']));
	$verifPassword= sha1(htmlspecialchars($_POST['verifPassword']));

	$emails=SIGNUP::verifUser($email);

	if(!empty($emails)) {
		header('Location: ../view/signupFail.php');
	}
	elseif (empty($firstName)||empty($lastName)||empty($email)||empty($password)||empty($verifPassword)) {
		header('Location: ../view/signupIncomplete.php');
	}
	elseif ($password!=$verifPassword) {
		header('Location: ../view/signupVerifPassword.php');
	}
	else {
		SIGNUP::addUser($firstName, $lastName, $email, $password);

	header('Location: ../view/signupSuccess.php');
	}