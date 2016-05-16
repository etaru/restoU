<!--Comment model-->
<?php
	class COMMENT
	{
		//function to retrieve all comments
		public static function getAllComments($idM)
		{

			//connection database
			require_once("connexion_bd.php");
			$bd=connexion_bd();

			$req = $bd->prepare('SELECT comment FROM comment WHERE idM = :idM');

			$req->execute($idM);

			$data = $req->fetchAll();

			return $data;

			$req->closeCursor();

		}

		//function to add comment in database
		public static function addComment($newComment){

			require_once("connexion_bd.php");
			$bd=connexion_bd();

			$req = $bd->prepare('INSERT INTO comment VALUES (:idUser, :idM, :comment)');

			$req->execute($newComment);

			$req->closeCursor();
		}
	}