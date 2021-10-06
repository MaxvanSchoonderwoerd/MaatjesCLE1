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
                <p class="profileInfo profileUnderline">Naam: </p>
                <p class="profileInfo profileUnderline">Mail: </p>
                <p class="profileInfo profileUnderline">Telefoon: </p>
                <a href="bewerken.php" class="profileButton">Bewerken</a>
            </div>
        </section>

        <section class="jobSection">
        <div class="jobContainer">
            <?php
            $jobResult = mysqli_query($db, "SELECT * FROM jobs");
            $userResult = mysqli_query($db, "SELECT * FROM users");

            while ($userRow = mysqli_fetch_array($userResult)) {
                $name = $userRow['first_name'];
                $tel = $userRow['tel'];
            }

            while ($jobRow = mysqli_fetch_array($jobResult)) {
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