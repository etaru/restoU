<!--Like controller-->
<?php
	
	//get information of model
	require_once('../model/like.php');
	require_once('../model/myprofile.php');

	if (isset($_COOKIE['connected'])) {
   
	    require_once('../model/login.php');

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

	    $action=$_POST["action"];

		//switch($action) {

			//case'addLike':
			   
				$meal = $_POST["meal"];
		        $user = $_POST['user'];

		        $tabU=array(
	    			'user' => $user,
				);
		
	            $idL=array(
	            	'idUser' => INFO::getId($tabU)[0],
	                'meal' => $meal
	            );

	            LIKE::addLike($idL);

	            include_once("../controller/index.php");

		    //break;

		//}
	}
	else {
		require_once('../controller/login.php');
	}