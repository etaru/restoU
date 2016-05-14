<!--ModifInfo moded
	used to treat
	modifications on
	users-->
<?php

class MODIFINFO{

	//function to update email
	public static function modifEmail($email)
	{
		//Connection to database
		require_once("connexion_bd.php");
	 	$bd=connexion_bd();

	 	//SQL request to change email
		$req = $bd->prepare('UPDATE user SET email=:email WHERE email=:em');

		$req->bindParam(':email', $firstName);

		$req->execute();
	}

	//function for admin to delete user
	public static function deleteUser($email)
	{
		require_once("connexion.php");
	 	$bdd=connexion();
	$req = $bdd->prepare('DELETE FROM Users WHERE pseudo=:pseudo');
	$req->bindParam(':pseudo', $pseudo);
	$req->execute();
	}

	//function for admin to change user to admin
	public static function addAdmin($email)
	{
		require_once("connexion_bd.php");
	 	$bd=connexion_bd();

	 	//SQL request to change user to admin
		$req = $bdd->prepare('UPDATE Users SET admin=:admin WHERE pseudo=:pseudo');

		$admin=1;

		$req->bindParam(':admin', $admin);
		$req->bindParam(':email', $email);

		$req->execute();
	}
}