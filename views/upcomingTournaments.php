<?php

$pageTitle = "Upcoming Tournaments";

include '../partials/head.php';

include '../partials/navigation.php';

?>

<h1>Upcoming Tournaments</h1>


<?php

$result = $dbConnection->query("SELECT id, tournamentName, description, startDate FROM tournaments ORDER BY startDate ASC");


?>

<?php include '../partials/footer.php'; ?>