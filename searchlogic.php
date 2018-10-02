<?php

//Checks session for search results

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

//If there are results, loops through array and extracts project data. Returns error if there is no match

    if (!empty($results['project'])) {
        $projReturn = $results['project'];

        foreach ($projReturn as $index => $item) {
            $returnProjectID = ($projReturn[$index]['ProjectID']);

            $returnYear = ($projReturn[$index]['Year']);

            $returnType = ($projReturn[$index]['ProjectType']);

            $returnLocation = ($projReturn[$index]['Location']);
        }
    } else {
        $returnError = "Could not find a project match, please search again.";
    }
}



