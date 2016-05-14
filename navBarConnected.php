<!--Navbar when connected-->
<?php

  $path = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $current = basename ($path);
  
  //verifies user is connected with cookie
  if (isset($_COOKIE['connected'])){
   
    require_once('../model/login.php');

    //retrieves users
    $users=LOGIN::userEmail();

    //set email to right user
    foreach ($users as $user) {

      if ($user['email'] == $_COOKIE['connected']){
        $email=$user['email'];
      }

    }
  
    //retrieve admins
    $admins=LOGIN::isAdmin($email);

    //set admin variable to user
    foreach ($admins as $admin) {
      $isadmin=$admin["admin"];
    }
  }
?>

<div class="navbar-fixed">

  <nav class="red darken-2">
    <div class="nav-wrapper container">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      
      <ul id="mobile-demo" class="side-nav">

        <?php if (isset($_COOKIE['connected'])){ ?>

          <li><a href="myprofile.php">My profile</a></li>

          <?php if (isset($_COOKIE['connected']) && $isadmin>0) { ?>

            <li><a href="room.php">Rooms</a></li>
            <li><a href="addMenu.php">Add menu</a></li>
            <li><a href="users.php">Users</a></li>
            
          <?php } ?>

            <li><a href="../controller/logout.php">Log out</a></li>

          <?php }

        else { ?>

          <li><a href="signup.php">Sign up</a></li>
          <li><a href="login.php">Log in</a></li>

        <?php }?>

      </ul>

      <a href="index.php" class="brand-logo">Resto'U<i class="material-icons tiny left">restaurant</i></a>

      <ul id="nav-mobile" class="right hide-on-med-and-down">
        
        <?php if (isset($_COOKIE['connected'])){ ?>

          <li><?php print "Hello ".$email." !"?></li>
            
          <?php if (isset($_COOKIE['connected']) && $isadmin>0) { ?>

            <li class="<?php if (($current == 'room.php')||($current == 'room.php')){ echo "active";} else{ echo'no_current';}?>"><a href="room.php">Rooms</a></li>

            <li class="<?php if (($current == 'addMenu.php')||($current == 'addMenu.php')){ echo "active";} else{ echo'no_current';}?>"><a href="addMenu.php">Add menu</a></li>

            <li class="<?php if ($current == 'users.php'){ echo "active";} else{ echo'no_current';}?>"><a href="users.php">Users</a></li>

          <?php } ?>

          <li class="<?php if ($current == 'myprofile.php'){ echo "active";} else{ echo'no_current';}?>"><a href="myprofile.php">My profile</a></li>
          
          <li class="<?php if ($current == 'logout.php'){ echo "active";} else{ echo'no_current';}?>"><a href="../controller/logout.php">Log out</a></li>

        <?php }

        else { ?>

          <li class="<?php if ($current == 'signup.php'){ echo "active";} else{ echo'no_current';}?>"><a href="signup.php">Sign up</a><i class="material-icons prefix left">account_circle</i></li>
          <li class="<?php if ($current == 'login.php'){ echo "active";} else{ echo'no_current';}?>"><a href="login.php">Log in</a></li>

        <?php }?>

      </ul>

    </div>
  </nav>

</div>