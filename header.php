<!--Header for all pages-->
<!DOCTYPE html>
  <html>
    <head>
      <title>Resto'U</title>
    </head>

    <header>
        <?php include("navBarConnected.php"); ?>
    </header>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <!--Import restoU.css-->
    <link rel="stylesheet" type="text/css" href="../css/restoU.css">

    <!--Optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Scripts-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/init.js"></script>
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
  </html>