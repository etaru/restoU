<!--Login view-->
<?php include("../header.php"); ?>
  
  <main>
    <div class="row" class="container">
      <!--form to fill-->
      <form class="col s12" method="POST" action="../controller/login.php">
        <div class="row">

          <!--email-->
          <div class="input-field col s4 offset-s4">
            <i class="material-icons prefix">email</i>
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
          
          <!--password-->
          <div class="input-field col s4 offset-s4">
            <i class="material-icons prefix">lock</i>
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>

        </div>
      </form>

      <!--sign up link-->
      <div class="row" align="center">
        Don't have an account ?
        <a href="signup.php"> Sign up !</a>
      </div>
    </div>
  </main>

<?php include("../footer.php"); ?>