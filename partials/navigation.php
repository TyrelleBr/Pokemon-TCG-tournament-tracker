<?php session_start(); ?>

<body>
<header>
    <nav>
        <a href="index.php"><img src="../images/Pokeball.png" alt="Logo" width="250px" height="250px" /></a>
        <div class="nav-wrapper">
            <a href="#">Upcomming Tournaments</a>
            <a href="tournamentDetails.php">Tournaments</a>
            <a href="tournamentCreation.php">Create Tournament</a>
            
            <?php 

                if (isset($_SESSION['user_id'])) {
                    echo '<a class="btn" href="profile.php">Profile</a>';
                    echo '<a href="handlers/logout.php">Logout</a>'
                } else {
                    echo '<a class="btn" href="login.php">Log-in/Sign-up</a>';
                }
            ?>

            

        </div>
    </nav>
</header>