<?php

include '../config/config.php';

$pageTitle = "Sign-Up";

include '../partials/head.php';

?>

<?php include '../partials/navigation.php'; ?>

<section class="sign-up">
      <div class="sign-up-card">
        <h1>Sign Up</h1>

        <form method="post" action="#"></form>
          <label class="sign-up-label" for="username">Username:</label><br />
          <input type="text" id="fname" name="username" /><br />
          <label for="lname">Password:</label><br />
          <input type="password" id="password" name="password" /><br />
          <label for="email">Email:</label><br />
          <input type="email" id="email" name="email" /><br />
          <label for="lname">Date of Birth:</label><br />
          <input type="date" id="dateOfBirth" name="dateOfBirth" /><br />
          <input class="btn" type="submit" value="Submit" />
        </form>
      </div>
      <img
        src="../images/pokeballOnCards.jpeg"
        alt="toy pokeball on top of a pile of pokemon trading cards"
      />
    </section>

<?php include '../partials/footer.php'; ?>
