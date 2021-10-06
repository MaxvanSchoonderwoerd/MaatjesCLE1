<?php
include 'template.php';
include 'database.php';


?>

<?= template_head("Profile") ?>

<body>

<?= template_header("Profile") ?>

<main>
    <section class="infoSection">
        <div class="infoContainer">
            <h1 class="infoTitle">Mijn profiel</h1>
            <p class="infoBody">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </section>

    <section class="loginSection">
        <div class="profileContainer">
            <?php
            $userResult = mysqli_query($db, "SELECT * FROM users WHERE email = $_SESSION('email')");

            while ($userRow = mysqli_fetch_array($userResult)) {
                $firstName = htmlentities($userRow['first_name']);
                $lastName = htmlentities($userRow['last_name']);
                $email = htmlentities($userRow['email']);
                $tel = htmlentities($userRow['tel']);
            }
            ?>
            <p class="profileInfo"><i class="fas fa-user"></i> <?=$firstName?> <?=$lastName?></p>
            <p class="profileInfo"><i class="fas fa-envelope"></i> <?=$email?></p>
            <p class="profileInfo"><i class="fas fa-phone-alt"></i> <?=$tel?></p>
            <a href="bewerken.php" class="profileInfo">Bewerken</a>
            <a href="" class="profileInfo">Account verwijderen</a>
        </div>

    </section>
</main>
</body>

</html>