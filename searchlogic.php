<?php

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    if (!empty($results['project'])) {
        $projReturn = $results['project'];

        foreach ($projReturn as $i => $item) {
            $returnProjectID = ($projReturn[$i]['ProjectID']);

            $returnYear = ($projReturn[$i]['Year']);

            $returnType = ($projReturn[$i]['ProjectType']);

            $returnLocation = ($projReturn[$i]['Location']);
        }
    } else {
        $returnError = "Could not find project!";
    }
}



