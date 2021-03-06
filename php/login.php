<?php
include 'template.php';
include 'database.php';

//##########
//login
//##########
function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}

if (!empty($_POST)) {
    if (isset($_POST['loginEmail']) && isset($_POST['loginPassword'])) {
        if (isset($db)) {

            $email = mysqli_escape_string($db, $_POST['loginEmail']);

            $password = mysqli_escape_string($db, $_POST['loginPassword']);


            $sql = "SELECT password FROM users WHERE email = '$email'";


            $result = $db->query($sql);
            $hash = $result->fetch_assoc();

            $valid = password_verify($password, $hash['password']);
            //if it matches
            if ($valid == true) {
                echo "logged in";

                //start the session
                session_start();
                $_SESSION["loggedIn"] = true;
                $_SESSION["email"] = $email;

                $idQuery = mysqli_query($db, "SELECT id FROM users WHERE email = '$email'");
                $result = mysqli_fetch_array($idQuery);

                $_SESSION["userId"] = $result['id'];
                //clear the post
                $_POST = null;

                //send to home.php
                redirect("index.php");

            }
        }
    }
}


//##########
//register
//##########
if (isset($db)) {
    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['tel']) && !empty($_POST['password'])) {

        $firstname = mysqli_escape_string($db, $_POST['firstname']);
        $lastname = mysqli_escape_string($db, $_POST['lastname']);
        $email = mysqli_escape_string($db, $_POST['email']);
        $tel = mysqli_escape_string($db, $_POST['tel']);
        $password = mysqli_escape_string($db, $_POST['password']);
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `password`, `email`, `tel`) VALUES (NULL, '$firstname', '$lastname', '$hash', '$email', '$tel')";

        if (mysqli_query($db, $sql) == false) {
            throw new \Exception();
        }

        $valid = true;
        if ($valid == true) {

            session_start();
            $_SESSION["loggedIn"] = true;
            $_SESSION["email"] = $email;

            $idQuery = mysqli_query($db, "SELECT id FROM users WHERE email = '$email'");
            $result = mysqli_fetch_array($idQuery);

            $_SESSION["userId"] = $result['id'];
            //clear the post
            $_POST = null;

            //send to home.php
            redirect("index.php");

        }
    }
}

?>

<?= template_head("Login") ?>

<body>

<?= template_header("Login") ?>

<main>
    <section class="infoSection">
        <div class="infoContainer">
            <h1 class="infoTitle">Login om een klus te uploaden.</h1>
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
        <div class="loginRegisterContainer">

            <form class="loginContainer" method="post">
                <h2 class="inputTitle">Login</h2>
                <input class="input loginInput" type="email" id="loginEmail" name="loginEmail" placeholder="Email">
                <input class="input loginInput" type="password" id="loginPassword" name="loginPassword"
                       placeholder="Password">
                <button class="input loginButton" id="loginButton" type="submit">Login</button>
            </form>
            <form class="registerContainer" method="post">
                <h2 class="inputTitle">Nog geen account? </h2>
                <div class="input nameContainer">
                    <input class="loginInput nameInput name" type="text" id="firstname" name="firstname"
                           placeholder="Name">
                    <input class="loginInput nameInput surname" type="text" id="lastname" name="lastname"
                           placeholder="Achternaam">
                </div>
                <input class="input loginInput" type="email" id="email" name="email" placeholder="Email">
                <input class="input loginInput" type="tel" id="tel" name="tel" placeholder="Telefoon Nummer">
                <input class="input loginInput" type="password" id="password" name="password" placeholder="Password">
                <button class="input loginButton" id="loginButton" type="submit">Registreren</button>
            </form>
        </div>
    </section>
</main>
</body>

</html>