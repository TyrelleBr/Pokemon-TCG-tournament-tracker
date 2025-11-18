<?php

if (isset($_GET['success'])) {
    echo '<script>alert("Tournament Created");</script>';
}


$pageTitle = "Home";

include '../partials/head.php';

include '../partials/navigation.php'; 

?>

<section class="home-cta">
      <h1>Host your own Tournaments!</h1>
      <a href="../views/upcomingTournaments.php" class="btn">Host now</a>
    </section>

    <section class="upcoming-tournaments">
      <h1>Upcoming Tournaments</h1>

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
            ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book.
          </p>
          <a href="tournamentDetails.html" class="btn">View More</a>
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
            ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book.
          </p>
          <a href="tournamentDetails.html" class="btn">View More</a>
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
            ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book.
          </p>
          <a href="tournamentDetails.html" class="btn">View More</a>
        </div>
      </div>
    </section>

    <section class="home-cta-two">
      <div>
        <h1>CALL TO ACTION</h1>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book.
        </p>
      </div>
      <img
        src="../images/pokeballOnCards.jpeg"
        alt="toy pokeball on top of a pile of pokemon trading cards"
      />
    </section>

    
    <?php include '../partials/footer.php'; ?>
    
