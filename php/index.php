<?php
include 'template.php';

?>

<?= template_head("Home") ?>

<body>

<?= template_header("Home") ?>

<main>
    <div class="gradient">
        <img src="../src/infoImg.png" alt="infoImgs" class="infoImg">
    </div>
    <section class="infoSection">
        <div class="infoContainer">
            <h1 class="infoTitle">Wat doen wij?</h1>
            <p class="infoBody">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </section>
    <section class="btnImgSection">
        <div class="btnImgContainer">
            <div class="uploadButtonContainer"><a href="upload.php" class="uploadButton">Upload</a></div>
            <img class="pictureHome" src="https://source.unsplash.com/random/1920x1080" alt="Maatjes">
        </div>
    </section>

</main>
</body>

</html>