<?php

require('helpers.php');

$errors = false;
$hasErrors = false;

if (isset($_SESSION['errResults'])) {
    $errResults = $_SESSION['errResults'];

    $errors = $errResults['errors'];
    $hasErrors = $errResults['hasErrors'];
}

session_unset();