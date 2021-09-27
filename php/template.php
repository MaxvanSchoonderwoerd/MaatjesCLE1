<?php

function template_head($page) {
    echo <<<EOT
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Maatjes | $page</title>
</head>
EOT;
}

function template_header($page) {
//    header goes here
    echo <<<EOT
    <header>
    <div class="header">
        <a href="#" class="listItem"><img class="logo listItem" src="https://i.pravatar.cc/125/" alt="Maatjes"></a>
        <a href="#" class="listItem">Upload</a>
        <a href="#" class="listItem">Profiel</a>
        <a href="#" class="listItem">Login</a>
        <a href="#" class="listItem">Uitloggen</a>
    </div>
</header>
EOT;
}