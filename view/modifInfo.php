<!--ModifInfo view-->
<?php include("../header.php"); ?>

<main>
  <div class="row" class="container">
    <!--form to fill-->
    <form class="col s12" method="POST" action="../controller/modifInfo.php">
      <div class="row">

        <!--first name-->
        <div class="input-field col s4 offset-s4">
          <i class="material-icons prefix">account_circle</i>
          <input disabled id="firstName" type="text" class="validate" name="firstName">
          <label for="firstName"><?php print $firstName?></label>
        </div>

        <!--last name-->
        <div class="input-field col s4 offset-s4">
          <i class="material-icons prefix">account_circle</i>
          <input disabled id="lastName" type="text" class="validate" name="lastName">
          <label for="lastName"><?php print $lastName?></label>
        </div>

        <!--email-->
        <div class="input-field col s4 offset-s4">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="email">
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

      <!--submit button-->
      <div class="row center-align">
        <button class="btn waves-light btn light-green darken-1" type="submit" name="action">send</button>
      </div>

    </form>
  </div>

</main>

<?php include("../footer.php"); ?>