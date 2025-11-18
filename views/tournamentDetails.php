<?php

$pageTitle = "Tournament Details";

include '../partials/head.php';

?>

<?php include '../partials/navigation.php'; ?>

<section>
    <h1 class="page-title">Tournament Details</h1>

    <div class="tournament-details-card">
        <div class="details-header">
            <img src="../images/defaultAvatar.png" alt="Host profile picture">
            <div class="host-info">

                <p>Contact Host: randomUser123@example.com</p>
            </div>
        </div>

        <h1 class="tournament-name">Tournament Name</h1>

        <div class="tournament-info">
            <div class="detailsAndRules">
                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus ea numquam reprehenderit esse beatae
                    ipsum sequi cupiditate quos?
                </p>
                <p class="rules">
                    <strong>Rules:</strong> No cheating, standard TCG rules apply.
                </p>
            </div>
            <div class="date-location">
                <p><strong>Date:</strong> June 1st, 2026</p>
                <p><strong>Location:</strong> 123 Main Street, City</p>
            </div>
        </div>

        <div class="action-buttons">
            <a class="btn" href="tournamentBracket.php">View Bracket</a>
            <a class="btn" href="tournamentSignup.php">Register</a>
        </div>
    </div>
</section>

<?php include '../partials/footer.php'; ?>