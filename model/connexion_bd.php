<!--Connection to the database-->
<?php
	function connexion_bd()
	{
		try
		{
			$bd = new PDO('mysql:host=localhost;dbname=restou;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
	return $bd;
	}
 ?>