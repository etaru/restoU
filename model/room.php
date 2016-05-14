<!--Room model-->
<?php
	class ROOM
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
	}