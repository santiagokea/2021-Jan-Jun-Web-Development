<?php

require_once(__DIR__.'/router.php');


// ##############################
get('/login', 'render_login');
function render_login(){
  require_once(__DIR__.'/views/view_login.php');
  exit();
}

// ##############################
get('/login/error/:message', 'render_login_error');
function render_login_error($message){
  $display_error = $message;
  require_once(__DIR__.'/views/view_login.php');
  exit();
}


// ##############################
get('/profile', 'render_profile');
function render_profile(){
  require_once(__DIR__.'/views/view_profile.php');
  exit();
}




// ##############################
post('/login', 'user_login');
function user_login(){
  require_once(__DIR__.'/bridges/bridge_login.php');
  exit();
}


// ##############################
// For GET or POST
any('/404', 'error404');
function error404(){
  echo 'Not foundx';
  exit();
}