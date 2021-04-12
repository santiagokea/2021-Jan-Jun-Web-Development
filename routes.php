<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/router.php');

// ##############################
get('/', function(){
  echo 'x';
});


// For GET or POST
any('/404', function(){
  echo 'Not found';
});