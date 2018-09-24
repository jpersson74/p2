<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Joshua Persson CSCIE-15 Project 2</title>


</head>

<body>
<h1> WSP Geospatial Project Tracker</h1>

<div>

    <form action="process.php">

        <fieldset>
            <legend>Please enter a project ID:</legend>
        <label for="projectNum">Project ID:</label>
        <input type="text" id="projectNum" name="projectnumber" placeholder="Must start with ##X-">
        <br>
        </fieldset>
        <br>


        <fieldset>
            <legend>Please select a project year:</legend>
        <select name="year" id="projectyear">
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
        <input type="radio" name="projectype" value="Photogrammetry">Photogrammetry<br>
        <input type="radio" name="projectype" value="Survey">Survey<br>
        <input type="radio" name="projectype" value="GIS">GIS<br>
        <input type="radio" name="projectype" value="Laser Scanning">Laser Scanning<br>
        </fieldset>

        <br>
        <button id="submitData" class="button" type="button">Submit</button>
        <br>


    </form>
</div>

</body>

</html>
