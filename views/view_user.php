<?php

// VALITE EVERYTHING YOU CAN COME UP WITH
// 0054592281c8da68494d7101391445c6

if( ! isset($user_uuid) ){
  header('Location: /search');
  exit();
}
if( strlen($user_uuid) != 32){
  header('Location: /search');
  exit();
}
if( ! preg_match('/[^A-Za-z0-9]/', $user_uuid)) // '/[^a-z\d]/i' should also work.
{
  header('Location: /search');
  exit();
}




