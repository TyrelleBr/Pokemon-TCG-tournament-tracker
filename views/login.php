<?php

$pageTitle = "Login";

include '../partials/head.php';

?>

<?php include '../partials/navigation.php'; ?>

<section class="sign-up">
      <div class="sign-up-card">
        <h1>Login</h1>

        <form method="POST" action="../handlers/login.php">
          <label class="sign-up-label" for="username">Username:</label><br />
          <input type="text" id="username" name="username" /><br />
          <label for="password">Password:</label><br />
          <input type="password" id="password" name="password" /><br />
          <input class="btn" type="submit" value="Submit" />
        </form>

        <h3>Don't have an account? <a href="signup.php">Sign-up!</a></h3>
      </div>
      <img
        src="../images/pokeballOnCards.jpeg"
        alt="toy pokeball on top of a pile of pokemon trading cards"
      />
    </section>

<?php include '../partials/footer.php'; ?>
