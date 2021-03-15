<?php
// must start the engine
session_start();
// SESSION is an assoc array
$name = $_SESSION['name'];
echo "Hi $name {$_SESSION['last_name']}";
echo '<div></div>';
echo 'copyright @'.$_SESSION['year'];