<?php
include 'template.php';

?>

<?= template_head("Login") ?>

<body>

    <?= template_header("Login") ?>

    <main>
        <section class="loginSection">
            <div class="loginRegisterContainer">
                <form class="loginContainer" method="post">
                    <input class="input loginInput" type="text" id="fname" name="fname" value="username">
                    <input class="input loginInput" type="text" id="lname" name="lname" value="password">
                    <input class="input loginButton" type="submit" value="Login">
                </form>
                <form class="registerContainer " method="post">
                    <div class="input nameContainer">
                        <input class="loginInput nameInput" type="text" id="fname" name="fname" value="Naam">
                        <input class="loginInput nameInput" type="text" id="lname" name="lname" value="Achternaam">
                    </div>
                    <input class="input loginInput" type="text" id="lname" name="lname" value="niks">
                    <input class="input loginInput" type="text" id="lname" name="lname" value="niks">
                    <input class="input loginButton" type="submit" value="Register">
                </form>
            </div>
        </section>
    </main>
</body>

</html>