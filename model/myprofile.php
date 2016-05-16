<!--Myprofile model-->
<?php
	class INFO
	{
		//function to retrieve users
		public static function getInfo()
		{
			//connection database
			require_once("connexion_bd.php");
			$bd=connexion_bd();

			//SQL request to retrieve users
			$req=$bd->query("SELECT * FROM user;");

			$infos=$req->fetchAll();

			return $infos;
		}

		//function to retrieve id of user
		public static function getId($email)
		{
			//connection database
			require_once("connexion_bd.php");
			$bd=connexion_bd();

			//SQL request to retrieve users
			$req=$bd->prepare("SELECT idUser FROM user WHERE email=:user;");

			$req->execute($email);

			$id=$req->fetch();

			return $id;
		}
	}