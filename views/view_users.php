<?php
require_once(__DIR__.'/../db.php');

$q = $db->prepare('SELECT * FROM users');
$q->execute();
$rows = $q->fetchAll();
// print_r($rows);
// var_dump($rows);
echo json_encode($rows);