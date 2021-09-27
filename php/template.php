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
<!doctype html>
<html lang="en">
<body>
    <header>
        <div class="header">
            <h1>Maatjes</h1>
            <h2>Login</h2>
        </div>
    </header>
</body>
EOT;
}