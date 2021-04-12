<?php
// Top
require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_top.php');

// Main part of the page
try{
  $db_path = $_SERVER['DOCUMENT_ROOT'].'/db/users.db';
  $db = new PDO("sqlite:$db_path");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $q = $db->prepare('SELECT * FROM users');
  $q->execute();
  $users = $q->fetchAll();
  foreach($users as $user){
    echo 'x';
  }
}catch(PDOException $ex){
  echo $ex;
}




// Bottom
require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_bottom.php');
?>