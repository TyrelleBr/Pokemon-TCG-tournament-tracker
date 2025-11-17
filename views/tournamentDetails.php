<?php

$pageTitle = "login";

include '../partials/head.php';

?>

<?php include '../partials/navigation.php'; ?>

<section>
    <h1 class="meow">Tournament Details</h1>
    <div class="tournament-details-card">
        <div class="details">
            <img src="../images/defaultAvatar.png" alt="default profile picture">
            <h2>Hosted By: randomUser123</h2>
            <h1>Tournament Name</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus ea numquam reprehenderit esse beatae
                ipsum sequi cupiditate quos? Nemo repellat, exercitationem quia nihil a veritatis libero provident ab
                illo voluptatem!</p>
        </div>
        <div class="date-time">
            <h3>Date: June 1st 2026</h3>
            <h3>Location rd 123</h3>
        </div>

        <a class="btn" href="tournamentBracket.php">View Bracket</a>
        <a class="btn" href="tournamentSignup.php">Register</a>
    </div>
</section>

<?php include '../partials/footer.php'; ?>