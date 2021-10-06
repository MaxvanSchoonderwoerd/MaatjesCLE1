<?php
include 'template.php';
include 'database.php';

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}

session_start();

if ($_SESSION['loggedIn'] == false) {
    redirect("index.php");
}

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
            $userEmail = $_SESSION["email"];
            $userResult = mysqli_query($db, "SELECT * FROM users WHERE email = '$userEmail'");


            while ($userRow = mysqli_fetch_array($userResult)) {
                $firstName = $userRow['first_name'];
                $lastName = $userRow['last_name'];
                $email = $userRow['email'];
                $tel = $userRow['tel'];
            }

            ?>
            <p class="profileInfo profileUnderline">Naam: <?= $firstName ?> <?= $lastName ?></p>
            <p class="profileInfo profileUnderline">Mail: <?= $email ?></p>
            <p class="profileInfo profileUnderline">Telefoon: <?= $tel ?> </p>
            <a href="bewerken.php" class="profileInfo">Bewerken</a>
        </div>

    </section>
    <section class="jobSection">
        <div class="jobContainer">
            <?php

            $userId = $_SESSION["userId"];
            $jobResult = mysqli_query($db, "SELECT * FROM jobs WHERE user_id = '$userId'");


            while ($jobRow = mysqli_fetch_array($jobResult)) {
                $userId = $jobRow['user_id'];

                $userResult = mysqli_query($db, "SELECT * FROM users WHERE id = '$userId'");
                while ($userRow = mysqli_fetch_array($userResult)) {
                    $name = $userRow['first_name'];
                    $tel = $userRow['tel'];
                }
                $title = $jobRow['title'];
                $description = $jobRow['description'];
                $city = $jobRow['city'];


                switch ($jobRow['job_id'] % 4) {
                    case
                    0:
                        $color = "blue";
                        break;
                    case 1:
                        $color = "green";
                        break;
                    case 2:
                        $color = "red";
                        break;
                    case 3:
                        $color = "purple";
                        break;
                }
                jobGenerator("$color", "$title", "$description", "$name", "$city", "$tel");
            }
            ?>
        </div>
    </section>
</main>
</body>

</html>