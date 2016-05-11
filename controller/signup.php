<?php

	require_once('../model/signup.php');
	
	$firstName = htmlspecialchars($_POST['firstName']);
	$lastName = htmlspecialchars($_POST['lastName']);
	$email = htmlspecialchars($_POST['email']);
	$password = sha1(htmlspecialchars($_POST['password']));
	$verifPassword= sha1(htmlspecialchars($_POST['verifPassword']));

	addUser($firstName, $lastName, $email, $password);

	header('Location: ../view/signupSuccess.php');