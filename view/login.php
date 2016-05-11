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
        <a href="signup.php"> Sign up !</a>
      </div>
    </div>
  </main>

<?php include("../footer.php"); ?>