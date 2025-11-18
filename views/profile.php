<?php

$pageTitle = "Profile";

include '../partials/head.php';

?>

<?php include '../partials/navigation.php'; ?>

 <section class="about-and-stats">
      <div class="profile-wrapper">
        <div class="profile-card">
          <img src="../images/defaultAvatar.png" alt="default profile picture" />
          <h2>Username / Gamertag</h2>
          <h3>Country: Canada</h3>
          <h3>Bio:</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse fugiat
            harum facilis ipsa consequatur neque reprehenderit aperiam
            architecto.
          </p>
        </div>
      </div>

      <section class="profile-tournament-history">
        <h1>Tournament History</h1>
        <div class="card-wrapper">
          <div class="tournament-card">
            <img
              src="../images/defaultAvatar.png"
              alt="default avatar image"
              width="250px"
              height="250px"
            />
            <h2>Hosted by: randomName123</h2>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book.
            </p>
            <a href="tournamentDetails.php" class="btn">View More</a>
          </div>
          <div class="tournament-card">
            <img
              src="../images/defaultAvatar.png"
              alt="default avatar image"
              width="250px"
              height="250px"
            />
            <h2>Hosted by: randomName123</h2>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book.
            </p>
            <a href="tournamentDetails.php" class="btn">View More</a>
          </div>
          <div class="tournament-card">
            <img
              src="../images/defaultAvatar.png"
              alt="default avatar image"
              width="250px"
              height="250px"
            />
            <h2>Hosted by: randomName123</h2>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text
              ever since the 1500s, when an unknown printer took a galley of
              type and scrambled it to make a type specimen book.
            </p>
            <a href="tournamentDetails.php" class="btn">View More</a>
          </div>
        </div>
      </section>

<?php include '../partials/footer.php'; ?>
