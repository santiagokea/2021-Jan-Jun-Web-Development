<?php
  // redirect
  // Connect to the db 
  // check if there is a match in the email and password
  // check if the password is right password

  // password at least 2 characters and max 5 characters
  // strlen() <
  // strlen() >

  $right_email = 'a@a.com';
  // error redirect to login

  // VALIDATE VALIDATE VALIDATE
  if( ! filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL) ){
    // header('Location: /login/error?message=Invalid Email');
    $error_message = 'Invalid Email';
    header("Location: /login/error/$error_message");
    exit();
  }

  if( $right_email != $_POST['user_email'] ){
    // header('Location: /login/error?message=Email not found');
    $error_message = 'Email not found';
    header("Location: /login/error/$error_message");
    exit();
  }

  // success show profile
  header('Location: /profile');
  exit();
