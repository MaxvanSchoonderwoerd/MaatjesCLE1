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

            //storing userId from session in a variable so we can use it in mysqli queries
            $userId = $_SESSION["userId"];

            //selecting the row of the user using the user id
            $query = "SELECT * FROM users WHERE id = '$userId'";
            $userResult = mysqli_query($db, $query);

            //looping through the row setting each variable
            while ($userRow = mysqli_fetch_array($userResult)) {
                $firstName = $userRow['first_name'];
                $lastName = $userRow['last_name'];
                $email = $userRow['email'];
                $tel = $userRow['tel'];

            }


            //editing user info
            if (!empty($_POST['firstname']) || !empty($_POST['lastname']) || !empty($_POST['email']) || !empty($_POST['tel'])) {
                $firstName = empty($_POST['firstname']) ? $firstName : mysqli_escape_string($db, $_POST['firstname']);
                $lastName = empty($_POST['lastname']) ? $lastName : mysqli_escape_string($db, $_POST['lastname']);
                $email = empty($_POST['email']) ? $email : mysqli_escape_string($db, $_POST['email']);
                $tel = empty($_POST['tel']) ? $tel : mysqli_escape_string($db, $_POST['tel']);

                $sql = "UPDATE users SET first_name = '$firstName', last_name = '$lastName', email = '$email', tel = '$tel' WHERE id = '$userId'";

                if (mysqli_query($db, $sql) == false) {
                    throw new \Exception();
                }
            }

            ?>
            <h1 class="inputTitle">Verander gegevens</h1>
            <form action="" method="post">
                <input class="profileInput" type="text" id="firstname" name="firstname" placeholder=<?= $firstName; ?>>
                <input class="profileInput" type="text" id="lastname" name="lastname" placeholder=<?= $lastName; ?>>
                <input class="profileInput" type="text" id="email" name="email" placeholder=<?= $email; ?>>
                <input class="profileInput" type="text" id="tel" name="tel" placeholder=<?= $tel; ?>>
                <button class="profileButton" type="submit">Verander gegevens <i class="fas fa-user-edit"></i></button>
            </form>
        </div>

    </section>
    <section class="jobSection">
        <div class="jobContainer">
            <?php

            //deleting jobs
            if (isset($_POST['deleteBtn'])) {
                $_jobId = $_POST['deleteBtn'];
                $sql = "DELETE FROM jobs WHERE job_id = '$_jobId'";
                mysqli_query($db, $sql);
            }

            $userId = $_SESSION["userId"];
            $jobResult = mysqli_query($db, "SELECT * FROM jobs WHERE user_id = '$userId'");


            while ($jobRow = mysqli_fetch_array($jobResult)) {
                $userId = $jobRow['user_id'];
                $jobId = $jobRow['job_id'];

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
                jobGeneratorDelete("$color", "$title", "$description", "$name", "$city", "$tel", "$jobId");
            }
            ?>
        </div>
    </section>
</main>
</body>

</html>