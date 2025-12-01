<?php

$pageTitle = "Upcoming Tournaments";

include '../partials/head.php';

include '../partials/navigation.php';

include '../handlers/config.php'

?>

<h1>Upcoming Tournaments</h1>

<div class="upcoming-tournaments">
<?php

$result = $dbConnection->query("SELECT id, tournamentName, description, startDate FROM tournaments ORDER BY startDate ASC");

while ($row = $result->fetch_assoc()) {
    echo '<div class="tournament-card">';
    echo '<h2>' . $row['tournamentName'] . '</h2>';
    echo '<h3>Description:</h3>';
    echo '<p>' . $row['description'] . '</p>';
    echo '<a href="tournamentDetails.php?id=' . $row['id'] . '">View More</a>';
    echo '</div>';
}

?>

</div>

<?php include '../partials/footer.php'; ?>