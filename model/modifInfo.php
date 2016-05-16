<!--ModifInfo moded
	used to treat
	modifications on
	users-->
<?php

class MODIFINFO{

	//function to update email
	public static function modifEmail($email, $idUser)
	{
		//Connection to database
		require_once("connexion_bd.php");
	 	$bd=connexion_bd();

	 	//SQL request to change email
		$req = $bd->prepare('UPDATE user SET email=:email WHERE idUser=:idUser');

		$req->bindParam(':email', $email);
		$req->bindParam(':idUser', $idUser);

		$req->execute();
	}

	//function for admin to change user to admin
	public static function addAdmin($email)
	{
		require_once("connexion_bd.php");
	 	$bd=connexion_bd();

	 	//SQL request to change user to admin
		$req = $bdd->prepare('UPDATE user SET admin=:admin WHERE email=:email');

		$admin=1;

		$req->bindParam(':admin', $admin);
		$req->bindParam(':email', $email);

		$req->execute();
	}
}