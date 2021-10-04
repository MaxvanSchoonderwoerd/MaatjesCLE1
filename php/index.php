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
    <sectoon class="jobSection">
        <div class="jobContainer">
            <?php
            $result = mysqli_query($db, "SELECT * FROM jobs");
            while ($row = mysqli_fetch_array($result)) {

                for ($i = 0; $i <= 9; $i++) {
                    $x = $i % 4;
                    switch ($x) {
                        case 0:
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
                    jobGenerator("$color", "$title", "$description", "$name", "$city", "$tel");
                }
            }
            ?>
        </div>
    </sectoon>
</main>
</body>

</html>