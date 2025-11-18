<?php

$pageTitle = "Create Tournament";

include '../partials/head.php';

include '../partials/navigation.php';

?>

<div class="create-tournament-card">

<form class="createTForm" action="createTournament.php" method="POST">
    <h1>Tournament Details</h1>
    <h2>Tournament Name</h2>
    <label for="tournamentName"></label>
    <input type="text" id="tournamentName" name="tournamentName" required>
    <h2>Description</h2>
    <label for="description"></label>
    <textarea id="description" name="description" rows="4" required></textarea>
    <h2>Rules</h2>
    <label for="rules"></label>
    <textarea id="rules" name="rules" rows="4" required></textarea>
    <h2>Start Date</h2>
    <label for="startDate"></label>
    <input type="date" id="startDate" name="startDate" required>
    <h2>Location</h2>
    <label for="location"></label>
    <input type="text" id="location" name="location" required>
    <h2>Contact Email</h2>
    <label for="contactEmail"></label>
    <input type="email" id="contactEmail" name="contactEmail" required>
    <button class="btn" type="submit">Create Tournament</button>
</form>

</div>

<?php include '../partials/footer.php'; ?>