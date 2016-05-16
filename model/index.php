<!--Index model-->
<?php
	class INDEX
	{
		//function to retrieve rooms
		public static function getRoom()
		{
			//connection database
			require_once("connexion_bd.php");
			$bd=connexion_bd();

			//SQL request to retrieve rooms
			$req=$bd->query("SELECT * FROM room;");

			$rooms=$req->fetchAll();

			return $rooms;
		}

		//function to retrieve menus
		public static function getMenu()
		{
			//connection database
			require_once("connexion_bd.php");
			$bd=connexion_bd();

			$req=$bd->query("SELECT * FROM meal;");

			$meals=$req->fetchAll();

			return $meals;
		}
	}