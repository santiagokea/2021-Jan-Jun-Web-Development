<?php
// you must start the engine
// Creates an empty file
session_start();
// connected to the db
// get name out
$name = 'Santiago';
// $_GET[] $_POST[]
// Assosiative array
// Adds data to the empty file
$_SESSION['name'] = $name;
$_SESSION['last_name'] = 'Donoso';
// store the year
