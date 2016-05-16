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

			$req = $bd->prepare('SELECT * FROM comment WHERE idM = :meal');

			$req->execute($idM);

			$comments = $req->fetchAll();

			return $comments;

			$req->closeCursor();

		}

		//function to add comment in database
		public static function addComment($newComment){

			require_once("connexion_bd.php");
			$bd=connexion_bd();

			$req = $bd->prepare('INSERT INTO comment VALUES (:comment, :meal, :idUser)');

			$req->execute($newComment);

			$req->closeCursor();
		}
	}