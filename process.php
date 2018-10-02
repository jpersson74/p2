<?php

require('Form.php');

use DWA\Form;

//Starts session

session_start();

//Adds Form class

$form = new DWA\Form($_POST);

//Checks if there is information from form submit

if (isset($_POST['save'])) {
    $errors = $form->validate(
        [
            'projID' => 'required',
            'projYear' => 'required',
            'projType' => 'required',
            'projLoc' => 'required',
        ]
    );

//Adds errors to session

    $_SESSION['errResults'] = [

        'errors' => $errors,
        'hasErrors' => $form->hasErrors,

    ];

//If form has no errors, code below executes

    if (!$form->hasErrors) {
        $data = [

            'ProjectID' => $_POST['projID'],
            'Year' => $_POST['projYear'],
            'ProjectType' => $_POST['projType'],
            'Location' => $_POST['projLoc']
        ];

//Gets existing data from file

        $dataFile = 'projects.json';

        $dataArr = [];

        $dataToJSON = file_get_contents($dataFile);

        $dataArr = json_decode($dataToJSON, true);

        $dataArr[] = $data;

        $json = json_encode($dataArr, JSON_PRETTY_PRINT);

//Adds new data to JSON file

        file_put_contents('projects.json', $json);
    }

    header('Location: index.php');
}








