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
    redirect("login.php");
}

$succes = "hidden";


if (isset($db)) {
    if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['city'])) {

        $title = mysqli_escape_string($db, $_POST['title']);
        $description = mysqli_escape_string($db, $_POST['description']);
        $city = mysqli_escape_string($db, $_POST['city']);
        $userId = $_SESSION['userId'];


        $sql = "INSERT INTO `jobs` (`job_id`, `user_id`, `title`, `description`, `city`) VALUES (NULL, '$userId', '$title', '$description', '$city');";
        if (mysqli_query($db, $sql) == false) {
            throw new \Exception();
        } else {
            $succes = "visible";
        }
    }
}

?>

<?= template_head("Upload") ?>

<body>

<?= template_header("Upload") ?>

<main>
    <section class="infoSection">
        <div class="infoContainer">
            <h1 class="infoTitle">Plaats jou klus hier!!</h1>
            <p class="infoBody">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </section>
    <section class="succesSection <?=$succes?>">
        <div class="succesContainer">
            <h1>Gelukt! Uw klus is geplaatst.</h1>
        </div>
    </section>
    <section class="loginSection">
        <form action="" method="post" class="loginContainer loginContainerMargin">
            <h1 class="inputTitle">Plaats een klus</h1>
            <input class="input loginInput" type="text" id="title" name="title" maxlength="40" placeholder="Titel">
            <textarea class="input loginInput overview" type="text" id="description" name="description" maxlength="480"
                      placeholder="Omschrijving"></textarea>
            <input class="input loginInput" type="text" id="city" name="city" maxlength="30" placeholder="plaats">
            <button class="input loginButton" id="loginButton" type="submit">Plaats jou klus</button>
        </form>
    </section>
</main>
</body>