<?php
include 'template.php';
include 'database.php';

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
            <h1 class="infoTitle">Wat zijn maatjes</h1>
            <p class="infoBody">Een maatje is een vrijwilliger die samen met jou een probleem oplost of een klusje doet.
                Met het maatjes project bieden wij vrijwilligers een platvorm om vrijwillgerswerk te vinden, en hulp
                zoekende een platvorm om in contact te komen met vrijwilligers. Het grootste doel van het Maatjes
                project is het stimuleren van mensen om vrijwilligers te worden. Wij geloven namelijk in het helpen van
                elkaar, want op deze manier maken we de wereld een betere plek.
            </p>
            <h2 class="infoTitle">Hoe werkt het?</h2>
            <p class="infoBody">Bent u opzoek naar een maatje? dan kunt u nu gemakkelijk een klusje online zetten. Een
                vrijwilligers baantje posten gaat alsvolgt:</p>
            <ul class="infoList">
                <li>1. Maak een account of login</li>
                <li>2. Ga naar <a href="upload.php">de upload pagina</a></li>
                <li>3. Vul een titel, beschrijving en stad in</li>
                <li>4. Klaar! uw oproep naar een maatje staat online!</li>
            </ul>
            <p class="infoBody">Bent u vrijwilliger en wilt u reageren op een post? Dan kunt u het telefoon nummer bellen onder de des
                betreffende post om direct in contact te komen met dat maatje.
            </p>

        </div>
    </section>
    <section class="btnImgSection">
        <div class="btnImgContainer">

            <div class="gradient2">
                <img class="pictureHome" src="../src/helping.jpeg" alt="Helping">
            </div>

            <div class="uploadButtonContainer">
                <h3 class="uploadButtonTitle">Ontvang nu hulp van meer dan <span class="redText">300.000</span>
                    vrijwilligers</h3>
                <a href="upload.php" class="uploadButton">Upload</a>
            </div>
        </div>
    </section>
    <section class="jobSection">
        <div class="jobContainer">
            <?php
            $jobResult = mysqli_query($db, "SELECT * FROM jobs");


            while ($jobRow = mysqli_fetch_array($jobResult)) {
                $userId = $jobRow['user_id'];

                $userResult = mysqli_query($db, "SELECT * FROM users WHERE id = '$userId'");
                while ($userRow = mysqli_fetch_array($userResult)) {
                    $name = $userRow['first_name'];
                    $tel = $userRow['tel'];
                }
                $title = $jobRow['title'];
                $description = $jobRow['description'];
                $city = $jobRow['city'];

                switch ($jobRow['job_id'] % 4) {
                    case
                    0:
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
                jobGenerator("$color", "$title", "$description", "$name", "$city", "$tel", false);
            }
            ?>
        </div>
    </section>
</main>
</body>

</html>