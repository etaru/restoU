<!--ModifInfo controller-->
<?php
	
	//get information of model
	include_once('../model/signup.php');
	include_once('../model/myprofile.php');
	include_once('../model/modifInfo.php');

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

		$infos=INFO::getInfo();

		foreach ($infos as $info) {
			if ($info['email'] == $_COOKIE['connected']){
	        	$firstName=$info['firstName'];
	        	$lastName=$info['lastName'];
	        	$idUser = $info['idUser'];
	      }
		}

		if (isset($_POST['email'])) {
			$email = htmlspecialchars($_POST['email']);
			//retrieve email address
			$emails=SIGNUP::verifUser($email);

			if(empty($email)||!empty($emails)) {
				include_once('../view/modifInfoFail.php');
			}
			else {
				//cookies expires, need to login
				setcookie("connected", "val", time() -(120), "/", null, false, true);
				setcookie("admin", "val", time() -(120), "/", null, false, true);

				MODIFINFO::modifEmail($email, $idUser);

				include_once('../view/modifInfoSuccess.php');
			}
		}
		else{
			include_once('../view/modifInfo.php');
		}
	}
	else {
		include_once('../controller/login.php');
	}