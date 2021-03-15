<?php
// you must start the engine
session_start();
// connected to the db
// get name out
$name = 'Santiago';
// $_GET[] $_POST[]
// Assosiative array
$_SESSION['name'] = $name;