<!--Comment controller-->
<?php

	//get information of model
	require_once('../model/comment.php');
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

		if(isset($_POST["action"]))
	    {
		   $action = $_POST["action"];
	    }

	    switch($action) {

	    	case 'showComment':

				if(isset($_POST["idM"]))
				{
					$meal = $_POST["idM"];
				}
	    		$tab=array(
	        		'meal' => $meal,
	    		);

	    		$comments = COMMENT::getAllComments($tab);

	            include_once('../view/comment.php');

	    	break;
	    
	    	case 'addComment':

	    		if(isset($_POST["comment"])) {

					$comment = $_POST["comment"];
	                $meal = $_POST["meal"];
	                $user = $_POST['user'];

	                $tabU=array(
	        			'user' => $user,
	    			);

		
                    $idM=array(
                    	'comment' => $comment,
	                	'idUser' => INFO::getId($tabU)[0],
                        'meal' => $meal
                        );

                   	COMMENT::addComment($idM);

                    echo "<script>alert(\"comment added\")</script>";

                    $com=array(
                        'meal' => $_POST['meal']
                        );

                    $comments=COMMENT::getAllComments($com);

                    include_once('../view/comment.php');
	            }
	            else
	            {
	                 $message='<p>Comment missing</p>
	                    <p>Click <a href="../view/index.php">here</a> to come back to the catalog</p>';
	                    echo $message;
	            }

	        break;

	    }
	}
	else {
		require_once('../controller/login.php');
	}