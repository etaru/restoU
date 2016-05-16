<!--Like model-->
<?php
	class LIKE
	{
		//function to retrieve number of likes
		public static function getLikes($idM)
		{
			//connection database
			require_once("connexion_bd.php");
			$bd=connexion_bd();

			//SQL request to retrieve number of likes
			$req=$bd->prepare("SELECT likeCounter FROM `like` WHERE idM=:meal");

			$req->execute($idM);

			$likes=$req->fetchAll();

			return $likes;

		}

		//function to add comment in database
		public static function addLike($addLike)
		{

			require_once("connexion_bd.php");
			$bd=connexion_bd();

			$req = $bd->prepare('INSERT INTO `like` (idM, idUser) VALUES (:meal, :idUser)');

			$req->execute($addLike);

			$req->closeCursor();
		}
	}