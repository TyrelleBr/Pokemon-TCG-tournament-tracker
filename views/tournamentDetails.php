<?php

$pageTitle = "Tournament Details";

include '../handlers/config.php';
include '../partials/head.php';
include '../partials/navigation.php';

if(!isset($_GET['id'])) {
    echo 'Tournament not found.';
    exit;
}


$tournamentId = (int)$_GET['id'];

$statement = $dbConnection->prepare("SELECT * FROM tournaments WHERE id = ?");
$statement->bind_param("i", $tournamentId);
$statement->execute();
$result = $statement->get_result();

if ($result->num_rows === 0) {
    echo 'Tournament not found.';
    exit;
}

$tournament = $result->fetch_assoc();
$statement->close();
?>

<section>
    <h1 class="page-title">Tournament Details</h1>

    <div class="tournament-details-card">
        <div class="details-header">
            <img src="../images/defaultAvatar.png" alt="Host profile picture">
            <div class="host-info">

                <p>Contact Host: <?= htmlspecialchars($tournament['contactEmail']) ?></p>
            </div>
        </div>

        <h1 class="tournament-name"><?= htmlspecialchars($tournament['tournamentName']) ?></h1>

        <div class="tournament-info">
            <div class="detailsAndRules">
                <p class="description"> <?= htmlspecialchars($tournament['description']) ?>
                </p>
                <p class="rules">
                    <strong>Rules: </strong> <?= htmlspecialchars($tournament['rules']) ?>
                </p>
            </div>
            <div class="date-location">
                <p><strong>Date:</strong> <?= htmlspecialchars($tournament['startDate']) ?></p>
                <p><strong>Location: </strong><?= htmlspecialchars($tournament['location']) ?></p>
            </div>
        </div>

        <div class="action-buttons">
            <a class="btn" href="tournamentBracket.php">View Bracket</a>
            <a class="btn" href="tournamentSignup.php">Register</a>
        </div>
    </div>
</section>

<?php if (isset($_SESSION['user_id']) && isset($tournament['userId']) && $_SESSION['user_id'] == $tournament['userId']) : ?>


    <div class="delete-btn">
    <form method="POST" action="../handlers/deleteTournament.php">
        <input type="hidden" name="id" value="<?= (int)$tournament['id'] ?>">
        <button class="btn" type="submit">Delete</button>
    </form>
    </div>
    
<?php endif ?>

<?php include '../partials/footer.php'; ?>