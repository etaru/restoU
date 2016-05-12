<!--SignupSuccess view
    redirected here
    when sign up is successful
-->
<?php 
  include("../header.php");
?>

<main>
  <div class="row" class="container">
    <!--all fields disabled-->
    <form class="col s12" method="POST" action="../controller/signup.php">
      <div class="row">

        <!--first name-->
        <div class="input-field col s4 offset-s4">
          <i class="material-icons prefix">account_circle</i>
          <input disabled id="firstName" type="text" class="validate" name="firstName">
          <label for="firstName">First Name</label>
        </div>

        <!--last name-->
        <div class="input-field col s4 offset-s4">
          <i class="material-icons prefix">account_circle</i>
          <input disabled id="lastName" type="text" class="validate" name="lastName">
          <label for="lastName">Last Name</label>
        </div>

        <!--email-->
        <div class="input-field col s4 offset-s4">
          <i class="material-icons prefix">email</i>
          <input disabled id="email" type="email" class="validate" name="email">
          <label for="email" data-error="Incorrect email address !" data-success="">Email</label>
        </div>
        
        <!--password-->
        <div class="input-field col s4 offset-s4">
          <i class="material-icons prefix">lock</i>
          <input disabled id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>

        <!--password verification-->
        <div class="input-field col s4 offset-s4">
          <i class="material-icons prefix">lock</i>
          <input disabled id="verifPassword" type="password" class="validate" name="verifPassword">
          <label for="verifPassword">Password verification</label>
        </div>

      </div>

      <!--success chip-->
      <div class="section center-align">
        <div class="chip light-green darken-1">
          Successfull registration
          <i class="material-icons">done</i>
        </div>
      </div>

      <!--home button-->
      <div class="section center-align">
        <a href="index.php" class="waves-effect waves-light btn red darken-1"><i class="material-icons left">home</i>Home Page</a>
      </div>

    </form>
  </div>

</main>

<?php include("../footer.php"); ?>