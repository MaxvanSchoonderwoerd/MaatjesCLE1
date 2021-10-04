<?php
include 'template.php';

?>

<?= template_head("Upload") ?>

<body>

    <?= template_header("Upload") ?>

    <main>
    <section class="infoSection">
            <div class="infoContainer">
                <h1 class="infoTitle">Place your job here!</h1>
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
            <form action="" class="loginContainer loginContainerMargin">
            <h1>Place a job</h1>
            <input class="input loginInput" type="text" id="fname" name="fname" placeholder="Title">
            <input class="input loginInput" type="text" id="fname" name="fname" placeholder="Overview">
            <input class="input loginInput" type="text" id="fname" name="fname" value="Place">
            <input class="input loginButton" type="submit" value="Place your job">
            </form>
        </section>
    </main>
</body>