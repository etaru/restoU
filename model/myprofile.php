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
	}