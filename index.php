<?php

require('process.php');
require('projSearch.php');
require('searchlogic.php');
require('processlogic.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Joshua Persson CSCIE-15 Project 2</title>

    <link rel="stylesheet" href="css/p2.css">


</head>

<body>
<h1> WSP Geospatial Project Tracker</h1>

<div class='search'>

    <form method='POST' action='process.php'>


        <p> Enter project information below:</p>
        <fieldset>
            <legend>Please enter a project ID:</legend>
            <label for="projectNum">Project ID:</label>
            <input type="text" id="projID" name="projID" placeholder="Example: 18P-i18847">
            <br>
        </fieldset>
        <br>


        <fieldset>
            <legend>Please select a project year:</legend>
            <select name="projYear" id="projYear">
                <option value="" selected="selected">Select a Project Year</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
            </select>
        </fieldset>
        <br>
        <fieldset>
            <legend>Please select all that apply:</legend>
            <input type="radio" name="projType" value="Photogrammetry">Photogrammetry<br>
            <input type="radio" name="projType" value="Survey">Survey<br>
            <input type="radio" name="projType" value="GIS">GIS<br>
            <input type="radio" name="projType" value="Laser Scanning">Laser Scanning<br>
        </fieldset>
        <br>
        <fieldset>
            <legend>Location:</legend>
            <label for="projLoc">Project Location:</label>
            <input type="text" id="projLoc" name="projLoc" placeholder="Example: Providence, RI">

        </fieldset>
        <br>
        <input type='submit' name='save' value='Enter data'>
        <br>
        <br>

    </form>

    <!-- Code to add errors from form submition  -->

    <div class='submitError'>

        <?php if ($hasErrors) : ?>
            <ul class='submitErrorList'>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>


    </div>
    <div>
        <form method='GET' action='projSearch.php'>

            <fieldset>
                <legend>Search for project information here:</legend>
                <label for="projSearch">Search by Project ID: </label>
                <input type="text" name="projSearch" placeholder="Example: 18P-i18847" value='<?= $searchTerm ?? '' ?>'>
                <br>
            </fieldset>
            <br>
            <input type='submit' name='search' value='Search Projects'>
            <br>

        </form>


    </div>

    <p> Here are your search results:</p>

    <!-- Code to let user know that project information was not found -->
    <div class='noResults'>
        <?php if (isset($returnError)): ?>
            <?= $returnError ?>
        <?php endif; ?>
    </div>

    <!-- Code to return project information to page -->

    <div class='results'>

        <ul class='searchResults'>

        <?php if (isset($returnProjectID)): ?>
            <li>Project ID: <?= $returnProjectID ?></li>
        <?php endif; ?>

        <?php if (isset($returnYear)): ?>
            <li> Year: <?= $returnYear ?></li>
        <?php endif; ?>

        <?php if (isset($returnType)): ?>
            <li>Type: <?= $returnType ?></li>
        <?php endif; ?>

        <?php if (isset($returnLocation)): ?>
            <li>Location: <?= $returnLocation ?></li>
        <?php endif; ?>


        </ul>

    </div>

</body>

</html>
