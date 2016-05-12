<?php include("../header.php"); ?>

<main>
  <div class="center-align">
    <h5>
      <?php
        $jour = date('d');
        $mois = date('m');
        $annee = date('Y');
        echo $jour . '/' . $mois . '/' . $annee;
        ?>
    </h5>
  </div>

  <div class="row">

    <div class="col s10 m4 l2 offset-l2 offset-s1 offset-m2">
      <div class="card orange darken-1">
        <div class="card-content white-text">
          <span class="card-title">PIZZERIA</span>
          <h5>Midi</h5>
            <p></p>
          <h5>Soir</h5>
            <p></p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s10 m4 l2 offset-s1">
      <div class="card green darken-1">
        <div class="card-content white-text">
          <span class="card-title">GRILL</span>
          <h5>Midi</h5>
            <p></p>
          <h5>Soir</h5>
            <p></p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s10 m4 l2 offset-s1 offset-m2">
      <div class="card cyan darken-1">
        <div class="card-content white-text">
          <span class="card-title">AMERIQUE</span>
          <h5>Midi</h5>
            <p></p>
          <h5>Soir</h5>
            <p></p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s10 m4 l2 offset-s1">
      <div class="card purple darken-1">
        <div class="card-content white-text">
          <span class="card-title">AFRIQUE</span>
          <h5>Midi</h5>
            <p></p>
          <h5>Soir</h5>
            <p></p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
  

</main>

<?php include("../footer.php"); ?>