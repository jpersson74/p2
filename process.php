<?php

require('.:/usr/share/php/Form.php');

use DWA\Form;

session_start();

$form = new Form($_POST);

if (isset($_POST['save'])) {
    $errors = $form->validate(
        [
            'projID' => 'required',
            'projYear' => 'required',
            'projType' => 'required',
            'projLoc' => 'required',
        ]
    );

    $_SESSION['errResults'] = [

        'errors' => $errors,
        'hasErrors' => $form->hasErrors,

    ];

    if (!$form->hasErrors) {
        $data = [

            'ProjectID' => $_POST['projID'],
            'Year' => $_POST['projYear'],
            'ProjectType' => $_POST['projType'],
            'Location' => $_POST['projLoc']
        ];

        $dataFile = 'projects.json';

        $dataArr = [];

        $dataToJSON = file_get_contents($dataFile);

        $dataArr = json_decode($dataToJSON, true);

        $dataArr[] = $data;

        $json = json_encode($dataArr, JSON_PRETTY_PRINT);

        file_put_contents('projects.json', $json);
    }

    header('Location: index.php');
}








