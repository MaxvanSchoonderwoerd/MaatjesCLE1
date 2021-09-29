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
                    <input class="loginInput" type="text" id="fname" name="fname" value="username">
                    <input class="loginInput" type="text" id="lname" name="lname" value="password">
                    <input class="loginButton" type="submit" value="Login">
                </form>
                <form class="registerContainer " method="post">
                    <div class="nameContainer">
                        <input class="loginInput" type="text" id="fname" name="fname" value="Naam">
                        <input class="loginInput" type="text" id="lname" name="lname" value="Achternaam">
                    </div>
                    <input class="loginInput" type="text" id="lname" name="lname" value="niks">
                    <input class="loginButton" type="submit" value="Register">
                </form>
            </div>
        </section>
    </main>
</body>

</html>