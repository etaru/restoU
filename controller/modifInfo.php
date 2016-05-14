<!--ModifInfo controller-->
<?php
	
	//get information of model
	include_once('../model/signup.php');
	include_once('../model/myprofile.php');
	include_once('../model/modifInfo.php');

	$infos=INFO::getInfo();

	foreach ($infos as $info) {
		if ($info['email'] == $_COOKIE['connected']){
        	$firstName=$info['firstName'];
        	$lastName=$info['lastName'];
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
			MODIFINFO::modifEmail($email);
			include_once('../view/modifInfoSuccess.php');
		}
	}
	else{
		include_once('../view/modifInfo.php');
	}