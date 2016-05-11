<?php

	function addUser($firstName, $lastName, $email, $password)
	{
		require_once("../connexion_bd.php");

		$req = $bd->prepare('INSERT INTO user(idUser, firstName, lastName, email, password, admin) VALUES ("", :firstName, :lastName, :email, :password, :admin)');

		$admin = 0;

		$req->bindParam(':firstName', $firstName);
		$req->bindParam(':lastName', $lastName);
		$req->bindParam(':email', $email);
		$req->bindParam(':password', $password);
		$req->bindParam(':admin', $admin);

		$req->execute();
	}