<!--AddMenu controller
	functionnality not working-->
<?php
	
	//get information of model
	include_once('../model/addMenu.php');

	if (isset($_COOKIE['connected'])) {
   
	    include_once('../model/login.php');

	    //retrieves users
	    $users=LOGIN::userEmail();

	    //set email to right user
	    foreach ($users as $user) {

	      if ($user['email'] == $_COOKIE['connected']) {
	        $email=$user['email'];
	      }

	    }
	  
	    //retrieve admins
	    $admins=LOGIN::isAdmin($email);

	    //set admin variable to user
	    foreach ($admins as $admin) {
	      $isadmin=$admin["admin"];
	    }

		$rooms=MENU::getRoom();

		foreach ($rooms as $room) {
	    	$name[]=$room['name'];
	    	$idR=$room['idR'];
		}

		/*if(isset($_POST["idR"]) && isset($_Post["menu"]))
	    {
		   $idR = $_POST["idR"];
		   $menu = $_POST["menu"];
	    }

	    $idM=array(
        	'contentNoon' => $contentNoon,
            'idR' => $idR
        );

        MENU::addMenu($idM);*/

		include_once('../view/addMenu.php');

	}
	else {
		include_once('../controller/login.php');
	}