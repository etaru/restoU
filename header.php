<!--Header for all pages-->
<!DOCTYPE html>
  <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <!--Import restoU.css-->
      <link rel="stylesheet" type="text/css" href="../css/restoU.css">

      <!--Optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>restoU</title>
    </head>

    <header>
      <!--Navbar-->
      <nav class="red darken-2" role="navigation">
        
        <div class="nav-wrapper container">
          <a id="logo-container" href="index.php" class="brand-logo">RestoU</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><i class="material-icons prefix">account_circle</i></li>
            <li><a href="login.php">Login</a></li>
          </ul>
          
          <!--Optimized for mobile-->
          <ul id="mobile-demo" class="side-nav">
            <li><a href="login.php">Login</a></li>
          </ul>
          
        </div>
      </nav>
    </header>

    <!--Scripts-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/init.js"></script>
  </html>