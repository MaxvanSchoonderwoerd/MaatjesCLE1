<?php
function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}

session_start();

if ($_SESSION['loggedIn'] == true) {
    session_unset();
    session_destroy();
    redirect("index.php");
} else {
    redirect("index.php");
}