<?php

$pageTitle = "login";

include '../partials/head.php';

?>

<?php include '../partials/navigation.php'; ?>

<section class="sign-up">
      <div class="sign-up-card">
        <form>
          <label for="full_name">Full Name</label><br />
          <input type="text" id="full_name" name="full_name" /><br />
          <label for="gamertag">Gamertag</label><br />
          <input type="text" id="gamertag" name="gamertag" /><br />
          <label for="email">Email</label><br />
          <input type="email" id="email" name="email" /><br />
          <label for="tournament">Select Tournament</label><br />
          <select id="tournament" name="tournament">
            <option value="">Select Tournament</option>
            <option value="Tournament1">Tournament 1</option>
            <option value="Tournament2">Tournament 2</option>
            <option value="Tournament3">Tournament 3</option></select
          ><br />
          <label for="decklist">Decklist</label><br />
          <textarea
            id="decklist"
            name="decklist"
            rows="10"
            cols="50"
            placeholder="Enter your decklist here"
          ></textarea
          ><br />
          <label>
            <input type="checkbox" name="rules" />I agree to the tournament
            rules</label
          ><br />
          <label>
            <input type="checkbox" name="age" />
            I confirm I meet the age requirement </label
          ><br />
          <input type="submit" value="Submit" />
        </form>
      </div>
    </section>

<?php include '../partials/footer.php'; ?>
