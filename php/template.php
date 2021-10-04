<?php

function template_head($page)
{
    echo <<<EOT
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/5b818eb41b.js" crossorigin="anonymous"></script>
    <title>Maatjes | $page</title>
</head>
EOT;
}

function jobGenerator($color, $title, $description, $name, $city, $tel)
{
    echo <<<EOT
            <div class="jobCard $color">
                <h1 class="jobTitle">$title</h1>
                <p class="jobDescription">
                 $description
                </p>
                <p class="jobNameAndPlace dark$color">$name | <span class="uppercase">$city</span></p>
                <p id="whiteText" class="jobTel dark$color">Bel nu! <i class="fas fa-phone-alt"></i>$tel</p>
            </div>
EOT;
}

function template_header($page)
{
    if ($page == "Home") {
        $home = "underline";
    } else {
        $home = "";
    }
    if ($page == "Upload") {
        $upload = "underline";
    } else {
        $upload = "";
    }
    if ($page == "Profile") {
        $profile = "underline";
    } else {
        $profile = "";
    }
    if ($page == "Login") {
        $login = "underline";
    } else {
        $login = "";
    }
    if ($page == "Logout") {
        $logout = "underline";
    } else {
        $logout = "";
    }


    //    header goes here
    echo <<<EOT
    <header>
    <div class="header">
        <a href="index.php" class="listItem"><img class="logo" src="../src/maatjesLogo.png" alt="Maatjes"></a>
        <a href="index.php" class="listItem">Home<div class="$home"></div></a>
        <a href="upload.php" class="listItem">Upload<div class="$upload"></div></a>
        <a href="profile.php" class="listItem ">Profiel<div class="$profile"></div></a>
        <a href="login.php" class="listItem ">Login<div class="$login"></div></a>
        <a href="logout.php" class="listItem ">Uitloggen<div class="$logout"></div></a>
    </div>
</header>
EOT;
}
