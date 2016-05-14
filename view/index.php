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
          <span class="card-title"><?php print $name[0] ?></span>
          <h5>Lunch</h5>
          <h6><?php print $statusNoon[0] ?></h6>
          <p></p>
          <h5>Diner</h5>
          <h6><?php print $statusEvening[0] ?></h6>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s10 m4 l2 offset-s1">
      <div class="card green darken-1">
        <div class="card-content white-text">
          <span class="card-title"><?php print $name[1] ?></span>
          <h5>Lunch</h5>
          <h6><?php print $statusNoon[1] ?></h6>
          <h5>Diner</h5>
          <h6><?php print $statusEvening[1] ?></h6>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s10 m4 l2 offset-s1 offset-m2">
      <div class="card cyan darken-1">
        <div class="card-content white-text">
          <span class="card-title"><?php print $name[2] ?></span>
          <h5>Lunch</h5>
          <h6><?php print $statusNoon[2] ?></h6>
          <h5>Diner</h5>
          <h6><?php print $statusEvening[2] ?></h6>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s10 m4 l2 offset-s1">
      <div class="card purple darken-1">
        <div class="card-content white-text">
          <span class="card-title"><?php print $name[3] ?></span>
          <h5>Lunch</h5>
          <h6><?php print $statusNoon[3] ?></h6>
          <h5>Diner</h5>
          <h6><?php print $statusEvening[3] ?></h6>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
  

</main>

<?php include("../footer.php"); ?>