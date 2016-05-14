<!--Myprofile view-->
<?php include("../header.php"); ?>

<main>

  <div class="row" class="section">
    <div class="col s5 offset-s1">

      <h5><b>MY INFOS</b></h5>
      <div class="divider"></div>

      <table class="striped">
        <tbody>
          <tr>
            <th>First Name</th>
            <td><?php print $firstName?></td>
            <td></td>
          </tr>

          <tr>
            <th>Last Name</th>
            <td><?php print $lastName?></td>
            <td></td>
          </tr>

          <tr>
            <th>Email</th>
            <td><?php print $email?></td>
            <td><a href="modifInfo.php" class="btn-floating btn-tiny waves-effect waves-light red lighten-2"><i class="material-icons right">mode_edit</i></a></td>
          </tr>

          <tr>
            <th>Password</th>
            <td><i class="material-icons">lock</i></td>
            <td></td>
          </tr>

          <tr>
            <th>Admin</th>
            <td><?php print $isAdmin?></td>
            <td></td>
          </tr>
          
        </tbody>
      </table>
    

  </div>

</main>

<?php include("../footer.php"); ?>