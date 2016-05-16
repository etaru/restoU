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

		public static function addMenu($menu,$name)
		{
			require_once("connexion_bd.php");
			$bd=connexion_bd();

			//SQL request to change email
			$req = $bd->prepare('UPDATE meal SET content=:menu WHERE idR.meal=:idR.menu');

			$req->bindParam(':menu', $menu);
			$req->bindParam(':name', $name);

			$req->execute();

		}
	}