<!--Login model-->
<?php
	class LOGIN
	{
		//function to retrieve users
		public static function loggedin($email, $password)
		{
			//connection database
			require_once("connexion_bd.php");
			$bd=connexion_bd();

			//SQL request to retrieve users
			$req=$bd->prepare("SELECT COUNT(*) FROM user WHERE email=? AND password=?;");

			$req->execute(array($email, $password));

			$users=$req->fetch();

			return $users;
		}

		//function to konw if admin or not
		public static function isAdmin($email)
		{
			require_once("connexion_bd.php");
 			$bd=connexion_bd();

 			//SQL request to retrieve admin attribute
 			$req=$bd->prepare("SELECT admin FROM user WHERE email='$email';");

 			$req->execute();

 			$admins=$req->fetchAll();

 			return $admins;

		}
	}