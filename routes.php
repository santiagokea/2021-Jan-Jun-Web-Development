<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/router.php');

// ##############################
get('/', function(){
  require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_index.php');
});

// ##############################
post('/users', function(){
  echo 'user created';
});
// ##############################
post('/users/update/:id', function($id){
  echo "Updating user with id: $id";
});


// For GET or POST
any('/404', function(){
  echo 'Not found';
});