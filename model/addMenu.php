<!--AddMenu model-->
<?php
	class MENU
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

		public static function addMenu($newMenu)
		{
			require_once("connexion_bd.php");
			$bd=connexion_bd();

			//SQL request to change email
			$req = $bd->prepare('UPDATE meal SET contentNoon=:menu WHERE idR=:idR');

			$req->execute($newMenu);

			$req->closeCursor();

		}
	}