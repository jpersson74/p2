<?php

//Checks to see if Session has started, starts if it has not

if (!isset($_SESSION)) {
    session_start();
}

//Checks the search submission

if (!empty($_GET['search'])) {
    $projSearch = $_GET['projSearch'];

//Gets existing data from JSON

    $projectsJSON = file_get_contents('projects.json');

    $data = json_decode($projectsJSON, true);

//Loops through array to search for data

    foreach ($data as $projectID => $project) {
        if ($project['ProjectID'] != $projSearch) {
            unset($data[$projectID]);
        }
    }

//Writes data to Session to make available to searchlogic.php

    $_SESSION['results'] = [

        'project' => $data,
        'projSearch' => $projSearch,

    ];

    header('location: index.php');
}









