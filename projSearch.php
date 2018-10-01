<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!empty($_GET['search'])) {
    $projSearch = $_GET['projSearch'];

    $projectsJSON = file_get_contents('projects.json');

    $data = json_decode($projectsJSON, true);

    foreach ($data as $projectID => $project) {
        if ($project['ProjectID'] != $projSearch) {
            unset($data[$projectID]);
        }
    }

    $_SESSION['results'] = [

        'project' => $data,

    ];

    header('location: index.php');
}









