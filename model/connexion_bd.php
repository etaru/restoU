<!--Connection to the database-->
<?php
	function connexion_bd()
	{
		try
		{
			$bd = new PDO('mysql:host=127.4.194.2:3306;dbname=checkmymenu;charset=utf8', 'adminSp26JtB', 'IfFy4TC6abUL');
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
	return $bd;
	}
 ?>