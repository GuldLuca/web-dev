<?php
  // redirect
  // Connect to the db 
  // check if there is a match in the email and password
  // check if the password is right password

  // password at least 2 characters and max 5 characters
  // strlen() <
  // strlen() >

  // error redirect to login



  // Validate password
  if( strlen($_POST['password']) < 8){
    $error_message = 'Password must be at least 8 characters';
    header("Location: /signup/error/$error_message");
    exit();
  }

  // Validate password
  if( strlen($_POST['password']) > 50){
    $error_message = 'Password cannot be longer than 50 characters';
    header("Location: /signup/error/$error_message");
    exit();
  }

  //validate password match
  if($_POST['password'] != $_POST['password-repeat']){
    $error_message = 'Passwords are not the same';
    header("Location: /signup/error/$error_message");
    exit();
  }
  // Validate email
  if( ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
    // header('Location: /login/error?message=Invalid Email');
    $error_message = 'Invalid Email';
    header("Location: /signup/error/$error_message");
    exit();
  }

  //Validate first name
  if( strlen($_POST['first-name']) < 2){
    $error_message = 'First names under 2 characters are not valid in this system';
    header("Location: /signup/error/$error_message");
    exit();
  } 

  //Validate first name
  if( strlen($_POST['first-name']) > 20){
    $error_message = 'First names above 20 characters are not valid in this system';
    header("Location: /signup/error/$error_message");
    exit();
  }

    //Validate last name
    if( strlen($_POST['last-name']) < 2){
      $error_message = 'Last names under 2 characters are not valid in this system';
      header("Location: /signup/error/$error_message");
      exit();
    } 
  
    //Validate last name
    if( strlen($_POST['last-name']) > 20){
      $error_message = 'Last names above 20 characters are not valid in this system';
      header("Location: /signup/error/$error_message");
      exit();
    }

    //Validate phone
    if(!preg_match('/^[0-9]{8}$/', $_POST['phone'])){
      $error_message = 'Danish phone numbers must be 8 digits long exactly';
      header("Location: /signup/error/$error_message");
      exit();
    }
  // success show profile
  header('Location: /login');
  exit();
