<?php

$pageTitle = "Create Tournament";

include '../partials/head.php';

include '../partials/navigation.php';

?>

<form action="createTournament.php" method="POST">
    <h2>Tournament Details</h2>
    <label for="tournamentName">Tournament Name</label>
    <input type="text" id="tournamentName" name="tournamentName" required>
    <label for="description">Description</label>
    <textarea id="description" name="description" rows="4" required></textarea>
    <h2>Rules</h2>
    <label for="rules">Tournament Rules</label>
    <textarea id="rules" name="rules" rows="4" required></textarea>
    <h2>Start Date</h2>
    <label for="startDate">Start Date</label>
    <input type="date" id="startDate" name="startDate" required>
    <h2>Location</h2>
    <label for="location">Location</label>
    <input type="text" id="location" name="location" required>
    <h2>Contact Email</h2>
    <label for="contactEmail">Email</label>
    <input type="email" id="contactEmail" name="contactEmail" required>
    <button type="submit">Create Tournament</button>
</form>

<?php include '../partials/footer.php'; ?>