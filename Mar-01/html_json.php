<?php
// not associative but json
$user = new stdClass(); // JSON
$user->name = 'a';
$user->last_name = 'b';
echo "Hi $user->name $user->last_name";

echo $user;





