<?php

require_once(__DIR__.'/router.php');

// ##################################################
get('/', 'serve_index');
function serve_index(){
  require_once(__DIR__.'/views/view_index.php');
  exit();
}

// ##################################################
get('/login', 'serve_login');
function serve_login(){
  require_once(__DIR__.'/views/view_login.php');
  exit();
}

// ##################################################
any('/404', 'error404');
function error404(){
  echo 'Not found';
  exit();
}