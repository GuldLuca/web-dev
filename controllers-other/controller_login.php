<?php
  // redirect
  // Connect to the db 
  // check if there is a match in the email and password
  // check if the password is right password

  // password at least 2 characters and max 5 characters
  // strlen() <
  // strlen() >

  $right_email = 'a@a.com';
  $right_password = '12345';
  // error redirect to login

  // Validate password
  if( strlen($_POST['password']) < 2){
    $error_message = 'Password must be at least 2 characters';
    header("Location: /login/error/$error_message");
    exit();
  }

  // Validate password
  if( strlen($_POST['password']) > 5){
    $error_message = 'Password cannot be longer than 5 characters';
    header("Location: /login/error/$error_message");
    exit();
  }  

  // VALIDATE VALIDATE VALIDATE
  if( ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
    // header('Location: /login/error?message=Invalid Email');
    $error_message = 'Invalid Email';
    header("Location: /login/error/$error_message");
    exit();
  }

  if( $right_email != $_POST['email'] ||  $right_password != $_POST['password']  ){
    // header('Location: /login/error?message=Email not found');
    $error_message = 'Incorrect credentials';
    header("Location: /login/error/$error_message");
    exit();
  }


  // success show profile
  header('Location: /profile');
  exit();
