<?php
include 'template.php';

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
    <section class="loginSection">
        <form class="loginContainer loginContainerMargin">
            <h1>Plaats een klus</h1>
            <input class="input loginInput" type="text" id="fname" name="fname" placeholder="Titel">
            <textarea class="input loginInput overview" type="text" id="fname" name="fname" placeholder="Omschrijving"></textarea>
            <input class="input loginInput" type="text" id="fname" name="fname" placeholder="plaats">
            <input class="input loginButton" type="submit" value="Plaats jou klus">
        </form>
    </section>
</main>
</body>