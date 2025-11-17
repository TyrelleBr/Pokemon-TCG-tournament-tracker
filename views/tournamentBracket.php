<?php

$pageTitle = "login";

include '../partials/head.php';

?>

<?php include '../partials/navigation.php'; ?>

<section class="bracket">
      <div class="round round1">
        <div class="match">
          <p class="player">Player 1</p>
          <p class="player">Player 2</p>
        </div>
        <div class="match">
          <p class="player">Player 3</p>
          <p class="player">Player 4</p>
        </div>
        <div class="match">
          <p class="player">Player 5</p>
          <p class="player">Player 6</p>
        </div>
        <div class="match">
          <p class="player">Player 7</p>
          <p class="player">Player 8</p>
        </div>
      </div>

      <div class="round round2">
        <div class="match">
          <p class="player">Winner 1</p>
          <p class="player">Winner 2</p>
        </div>
        <div class="match">
          <p class="player">Winner 3</p>
          <p class="player">Winner 4</p>
        </div>
      </div>

      <div class="round round3">
        <div class="match">
          <p class="player">Finalist 1</p>
          <p class="player">Finalist 2</p>
        </div>
      </div>

      <div class="round round4">
        <div class="match winner">
          <p class="player">Winner</p>
        </div>
      </div>
</section>

<?php include '../partials/footer.php'; ?>
