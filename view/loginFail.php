<!--LoginFail view
    same as login, redirected
    here when error in login
-->
<?php include("../header.php"); ?>
  
  <main>
    <!--warning tag-->
    <div class="section center-align">
      <div class="chip orange darken-1">
        Invalid email or password !
        <i class="material-icons left">warning</i>
      </div>
    </div>

    <div class="row" class="container">
      <!--form to fill-->
      <form class="col s12" method="POST" action="../controller/login.php">
        <div class="row">

          <!--email-->
          <div class="input-field col s4 offset-s4">
            <i class="material-icons prefix">email</i>
            <input id="email" type="email" class="validate" name="email">
            <label for="email" data-error="Incorrect email address !" data-success="">Email</label>
          </div>
          
          <!--password-->
          <div class="input-field col s4 offset-s4">
            <i class="material-icons prefix">lock</i>
            <input id="password" type="password" class="validate" name="password">
            <label for="password">Password</label>
          </div>

        </div>

        <!--submit button-->
        <div class="row center-align">
          <button class="btn waves-light btn light-green darken-1" type="submit" name="action">send</button>
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