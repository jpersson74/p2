<?php

$errors = false;
$hasErrors = false;

//Gets data from process.php and makes it available to index.php

if (isset($_SESSION['errResults'])) {
    $errResults = $_SESSION['errResults'];

    $errors = $errResults['errors'];
    $hasErrors = $errResults['hasErrors'];
}

session_unset();