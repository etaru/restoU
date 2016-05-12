<?php
	class SIGNUP
	{
		public static function addUser($firstName, $lastName, $email, $password)
		{
			require_once("connexion_bd.php");
			$bd=connexion_bd();

			$req = $bd->prepare('INSERT INTO user(idUser, firstName, lastName, email, password, admin) VALUES ("", :firstName, :lastName, :email, :password, :admin)');

			$admin = 0;

			$req->bindParam(':firstName', $firstName);
			$req->bindParam(':lastName', $lastName);
			$req->bindParam(':email', $email);
			$req->bindParam(':password', $password);
			$req->bindParam(':admin', $admin);

			$req->execute();
		}

		public static function verifUser($email)
		{
			require_once("connexion_bd.php");
			$bd=connexion_bd();

			$req = $bd->prepare('SELECT email FROM user WHERE email = :em');

			$req->execute(array(':em' => $email));

			$emails = $req->fetch();

			return $emails;
		}
	}