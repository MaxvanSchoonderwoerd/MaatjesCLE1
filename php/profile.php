<?php
include 'template.php';

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
                <p class="profileInfo">Naam: </p>
                <p class="profileInfo">Mail: </p>
                <p class="profileInfo">Telefoon: </p>
                <a href="bewerken.php" class="profileInfo">Bewerken</a>
                <a href="" class="profileInfo">Account verwijderen</a>
            </div>
        </section>

        <section class="loginSection">
            <div class="profileContainer">
                <p class="profileInfo">Titel: </p>
                <p class="profileInfo">Omschrijving: </p>
                <p class="profileInfo">Plaats: </p>
                <a href="bewerken.php" class="profileInfo">Bewerken</a>
                <a href="" class="profileInfo">Klus verwijderen</a>
            </div>
        </section>
    </main>
</body>

</html>