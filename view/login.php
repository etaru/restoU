<!DOCTYPE html>
  <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      
      <!--Optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>restoU</title>
    </head>

    <?php include("../header.php"); ?>

    <main>
      <div class="row" class="container">
        <form class="col s12">
          <div class="row">

            <div class="input-field col s4 offset-s4">
              <i class="material-icons prefix">email</i>
              <input id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">Email</label>
            </div>
            
            <div class="input-field col s4 offset-s4">
              <i class="material-icons prefix">lock</i>
              <input id="icon_prefix" type="password" class="validate">
              <label for="icon_prefix">Password</label>
            </div>

          </div>
        </form>

        <div class="row" align="center">
          Don't have an account ?
          <a href="signin.php"> Sign up !</a>
        </div>
      </div>
    </main>

    <?php include("../footer.php"); ?>

    <!--Scripts-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
  </html>