<?php
  // redirect
  // Connect to the db 
  // check if there is a match in the email and password
  $right_email = 'a@a.com';
  // error redirect to login

  // VALIDATE VALIDATE VALIDATE
  if( ! filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL) ){
    // header('Location: /login/error?message=Invalid Email');
    header('Location: /login/error/Invalid Email');
    exit();
  }

  if( $right_email != $_POST['user_email'] ){
    // header('Location: /login/error?message=Email not found');
    header('Location: /login/error/Email not found');
    exit();
  }

  // success show profile
  header('Location: /profile');
  exit();
