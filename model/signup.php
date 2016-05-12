<!--Signup model-->
<?php
	class SIGNUP
	{
		//function for adding user to database
		public static function addUser($firstName, $lastName, $email, $password)
		{
			//connection database
			require_once("connexion_bd.php");
			$bd=connexion_bd();

			//SQL request for inserting user in user table
			$req = $bd->prepare('INSERT INTO user(idUser, firstName, lastName, email, password, admin) VALUES ("", :firstName, :lastName, :email, :password, :admin)');

			//admin is off (0) by default
			$admin = 0;

			$req->bindParam(':firstName', $firstName);
			$req->bindParam(':lastName', $lastName);
			$req->bindParam(':email', $email);
			$req->bindParam(':password', $password);
			$req->bindParam(':admin', $admin);

			$req->execute();
		}

		//function to verify if user is already in database
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