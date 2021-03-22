<?php

// require_once(__DIR__.'/router.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/router.php');

// ##################################################
get('/', function(){
  echo 'Index'; 
});

// ##################################################
get('/posts', function(){
  require_once($_SERVER['DOCUMENT_ROOT'].'/views/view_posts.php');
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

// ##################################################
post('/users/:id', function($id){
  echo "Updating user with id: $id";
});

// ##################################################
delete('/users/:id', function($id){
  echo "Deleting user with id: $id";
});

// ##################################################
any('/404', function(){
  echo 'Page not found';
});





