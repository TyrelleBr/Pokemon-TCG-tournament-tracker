<?php

$pageTitle = "login";

include '../partials/head.php';

?>

<?php include '../partials/navigation.php'; ?>

<section class="sign-up">
      <div class="sign-up-card">
        <h1>Login</h1>

        <form>
          <label class="sign-up-label" for="fname">Username:</label><br />
          <input type="text" id="fname" name="fname" /><br />
          <label for="lname">Password:</label><br />
          <input type="text" id="lname" name="lname" /><br />
        </form>
      </div>
      <img
        src="images/pokeballOnCards.jpeg"
        alt="toy pokeball on top of a pile of pokemon trading cards"
      />
    </section>

<?php include '../partials/footer.php'; ?>
