<?php
	class LOGIN
	{
		public static function ($firstName, $lastName, $email, $password)
		{
			require_once("connexion_bd.php");
			$bd=connexion_bd();