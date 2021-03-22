<?php

// require_once(__DIR__.'/router.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/router.php');

// ##################################################
get('/', function(){
  echo 'Index'; 
});

// ##################################################
get('/users', function(){
  echo 'Users'; 
});


// ##################################################
get('/users/:id', function($id){
  echo "Getting user with id $id";
});

// ##################################################
post('/users', function(){
  echo 'User created with id: 1';
});






