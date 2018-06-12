<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Pico y Placa Predictor"/>
        <meta name="author" content="Alex Chavez"/>
        <script type="text/javascript" src="JS/jquery-1.12.3.js"></script>
        <script type="text/javascript" src="JS/index.js"></script>
        <script type="text/javascript" src="JS/sweetalert.min.js"></script>
        <link type="text/css" href="CSS/styles.css" rel="stylesheet">
        <link type="text/css" href="CSS/sweetalert.css" rel="stylesheet">
        <title>Driving Schedule Predictor</title>
    </head>
    <body>
        <div id='mainContainer' class='mainContainer'>
            <h3>'Pico y Placa' Driving Schedule Predictor</h3>
            <form id="drivingScheduleValidatorForm" name="drivingScheduleValidatorForm" method="post" action="validateDrivingSchedule()">
                <label>Car Plate Number:</label>
                <input type="text" id="carPlate" name="carPlate" value="" maxlength="8" placeholder="Example: AAA-0000, AAA-000"/>
                <label>Date:</label>
                <input type="date" id="date" name="date" value="" placeholder="Date"/>
                <label>Time (24 hours format):</label>
                <input type="time" id="time" name="time" value="" placeholder="Time"/>
                <input type="button" id="validateButton" name="validateButton" value="Check Plate Permission"/>
            </form>
        </div>
    </body>
</html>
