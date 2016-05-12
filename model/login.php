<?php
	class LOGIN
	{
		public static function login($email, $password)
		{
			require_once("connexion_bd.php");
			$bd=connexion_bd();

			$req = $bdd->prepare("SELECT * FROM user WHERE email='$email' AND password='$password';");

			$req->execute();

			