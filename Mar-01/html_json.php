<?php
// not associative but json
// ini_set('display_errors', 0);
$user = new stdClass(); // JSON
$user->name = 'a';
$user->last_name = 'b';
$user->age = 1;
unset($user->age);
// echo "Hi $user->name $user->last_name";
// You cannot echo Array nor JSON
echo json_encode($user);





