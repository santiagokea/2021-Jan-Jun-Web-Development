<?php

require_once(__DIR__.'/router.php');
// ##############################
get('/user/:name', 'get_user_by_name');
function get_user_by_name($name){
  // $name
  exit();
}


// ##############################
post('/login', 'login');
function login(){
  // email or phone
  // password
  exit();
}

post('/signup', 'signup');
function signup(){
  // name
  // last name
  // email
  // password
  // confirm password
  exit();
}

post('/update-profile', 'update_profile');
function update_profile(){
  // name
  // last name
  // email
  // password
  exit();
}

// IT IS A POST , GET

/*
  we need to login
  post('/login')
  it is a GET -> yes thumbup -> no angry face

  we need to signup
  we need to logout
  we need to update profile
  we need to search for a user by name/id
  search for a user by age
  search for a use by gender
  search by user by gender and age
  block a user

  Create POST
  Read GET
  Update POST 
  Delete POST

*/
post('/user/block', 'block_user');
function block_user($id){
  // $_POST['id']
  exit();
}




// ##############################
// For GET or POST
any('/404', 'error404');
function error404(){
  echo 'Not found';
  exit();
}