<!--Index view-->
<?php include("../header.php"); ?>

<main>
  <div class="container center-align">
    <h4>Check out today's meals !</h4>
    <p>Don't hesitate to create your account and start giving your feedback !</p>
  </div>

  <div class="center-align">
    <h5>
      <?php
        $jour = date('d');
        $mois = date('m');
        $annee = date('Y');
        print $jour . '/' . $mois . '/' . $annee;
        ?>
    </h5>
  </div>

  <div class="row">

    <div class="col s10 m4 l2 offset-l2 offset-s1 offset-m2">
      <div class="card orange darken-1">
        <div class="card-content white-text">
          <span class="card-title"><?php print '<strong>'.$name[0].'</strong>' ?></span>
          <h5>
            Lunch |
            <?php if (isset($_COOKIE['connected'])){
                  $user = $_COOKIE['connected'];
                  echo "<form class ='opbutton' action='../controller/like.php' method='POST'>
                  <input type='hidden' value='like' name='action'>
                  <input type='hidden' value=",$idM[0]," name='meal'>
                  <input type='hidden' value=",$user," name='user'>
                  <button type='submit' class='btn btn-danger'><i class='material-icons'>thumb_up</i></button>
                  </form>"; }?>
            <?php print 'Likes: <strong>'.$likeCounter[0].'</strong>' ?>
          </h5>
          <h6><?php print $statusNoon[0] ?></h6>
          <p><?php print $contentNoon[0] ?></p>
        </div>
        <div class="card-action">
          <form class ='opbutton' action='../controller/comment.php' method='POST'>
            <input type='hidden' value='showComment' name='action'>
              <?php echo "<button type='submit' name='idM' value=",$idM[0]," class='btn btn-danger'>Comment
                    </button>";?>
          </form>
        </div>
      </div>
    </div>

    <div class="col s10 m4 l2 offset-s1">
      <div class="card green darken-1">
        <div class="card-content white-text">
          <span class="card-title"><?php print '<strong>'.$name[1].'</strong>' ?></span>
          <h5>
            Lunch |
            <?php if (isset($_COOKIE['connected'])){
                  $user = $_COOKIE['connected'];
                  echo "<form class ='opbutton' action='../controller/like.php' method='POST'>
                  <input type='hidden' value='like' name='action'>
                  <input type='hidden' value=",$idM[1]," name='meal'>
                  <input type='hidden' value=",$user," name='user'>
                  <button type='submit' class='btn btn-danger'><i class='material-icons'>thumb_up</i></button>
                  </form>"; }?>
            <?php print 'Likes: <strong>'.$likeCounter[1].'</strong>' ?>
          </h5>
          <h6><?php print $statusNoon[1] ?></h6>
          <p><?php print $contentNoon[1] ?></p>
        </div>
        <div class="card-action">
          <form class ='opbutton' action='../controller/comment.php' method='POST'>
            <input type='hidden' value='showComment' name='action'>
              <?php echo "<button type='submit' name='idM' value=",$idM[1]," class='btn btn-danger'>Comment
                    </button>";?>
          </form>
        </div>
      </div>
    </div>

    <div class="col s10 m4 l2 offset-s1 offset-m2">
      <div class="card blue darken-1">
        <div class="card-content white-text">
          <span class="card-title"><?php print '<strong>'.$name[2].'</strong>' ?></span>
          <h5>
            Lunch |
            <?php if (isset($_COOKIE['connected'])){
                  $user = $_COOKIE['connected'];
                  echo "<form class ='opbutton' action='../controller/like.php' method='POST'>
                  <input type='hidden' value='like' name='action'>
                  <input type='hidden' value=",$idM[2]," name='meal'>
                  <input type='hidden' value=",$user," name='user'>
                  <button type='submit' class='btn btn-danger'><i class='material-icons'>thumb_up</i></button>
                  </form>"; }?>
            <?php print 'Likes: <strong>'.$likeCounter[2].'</strong>' ?>
          </h5>
          <h6><?php print $statusNoon[2] ?></h6>
          <p><?php print $contentNoon[2] ?></p>
        </div>
        <div class="card-action">
          <form class ='opbutton' action='../controller/comment.php' method='POST'>
            <input type='hidden' value='showComment' name='action'>
              <?php echo "<button type='submit' name='idM' value=",$idM[2]," class='btn btn-danger'>Comment
                    </button>";?>
          </form>
        </div>
      </div>
    </div>

    <div class="col s10 m4 l2 offset-s1">
      <div class="card purple darken-1">
        <div class="card-content white-text">
          <span class="card-title"><?php print '<strong>'.$name[3].'</strong>' ?></span>
          <h5>
            Lunch |
            <?php if (isset($_COOKIE['connected'])){
                  $user = $_COOKIE['connected'];
                  echo "<form class ='opbutton' action='../controller/like.php' method='POST'>
                  <input type='hidden' value='like' name='action'>
                  <input type='hidden' value=",$idM[3]," name='meal'>
                  <input type='hidden' value=",$user," name='user'>
                  <button type='submit' class='btn btn-danger'><i class='material-icons'>thumb_up</i></button>
                  </form>"; }?>
            <?php print 'Likes: <strong>'.$likeCounter[3].'</strong>' ?>
          </h5>
          <h6><?php print $statusNoon[3] ?></h6>
          <p><?php print $contentNoon[3] ?></p>
        </div>
        <div class="card-action">
          <form class ='opbutton' action='../controller/comment.php' method='POST'>
            <input type='hidden' value='showComment' name='action'>
              <?php echo "<button type='submit' name='idM' value=",$idM[3]," class='btn btn-danger'>Comment
                    </button>";?>
          </form>
        </div>
      </div>
    </div>
  </div>
  

</main>

<?php include("../footer.php"); ?>