<?php
include 'template.php';

?>

<?= template_head("Login") ?>

<body>

    <?= template_header("Login") ?>

    <main>
        <section class="infoSection">
            <div class="infoContainer">
                <h1 class="infoTitle">Login om hulp te krijgen.</h1>
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
                    <h2>Login</h2>
                    <input class="input loginInput" type="text" id="fname" name="fname" placeholder="Username">
                    <input class="input loginInput" type="password" id="lname" name="lname" placeholder="Password">
                    <input class="input loginButton" type="submit" value="Login">
                </form>
                <form class="registerContainer " method="post">
                    <h2>Nog geen account?   </h2>
                    <div class="input nameContainer">
                        <input class="loginInput nameInput name" type="text" id="fname" name="fname" placeholder="Name">
                        <input class="loginInput nameInput surname" type="text" id="lname" name="lname" placeholder="Achternaam">
                    </div>
                    <input class="input loginInput" type="email" id="lname" name="lname" placeholder="Email">
                    <input class="input loginInput" type="tel" id="lname" name="lname" placeholder="Telefoon Nummer">
                    <input class="input loginInput" type="password" id="lname" name="lname" placeholder="Password">
                    <input class="input loginButton" type="submit" value="Registreren">
                </form>
            </div>
        </section>
    </main>
</body>

</html>