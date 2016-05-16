<!--Login model-->
<?php
	class LOGIN
	{
		//function to retrieve users
		public static function loggedin($loggedin)
		{
			//connection database
			require_once("connexion_bd.php");
			$bd=connexion_bd();

			//SQL request to retrieve information on user
			$req=$bd->prepare('SELECT * FROM user WHERE email = :email');
            
	        $req->execute($loggedin);

	        //retrieve data in an array
	        $data=$req->fetch();

	        return $data;
			}

		//function to konw if admin or not
		public static function isAdmin($email)
		{
			require_once("connexion_bd.php");
 			$bd=connexion_bd();

 			//SQL request to retrieve admin attribute
 			$req=$bd->prepare("SELECT admin FROM user WHERE email='$email';");

 			$req->execute();

 			$admins=$req->fetchAll();

 			return $admins;

		}

		//function to retrieve user's email
		public static function userEmail()
		{
		    require_once("connexion_bd.php");
		    $bd=connexion_bd();

		    $req = $bd->query("SELECT email FROM user");

		    $users= $req->fetchAll();

		    return $users;
		}
	}