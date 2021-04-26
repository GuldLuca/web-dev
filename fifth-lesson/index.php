<?php

require_once(__DIR__.'/router.php');

//////////////////////////////////   Login    /////////////////////////////////


//Serve login page
get('/login', 'render_login');
function render_login(){
  require_once(__DIR__.'/views/view_login.php');
  exit();
}

//Serve login error page
get('/login/error/:message', 'render_login_error');
function render_login_error($message){
  $display_error = $message;
  require_once(__DIR__.'/views/view_login.php');
  exit();
}

//Serve profile page
get('/profile', 'render_profile');
function render_profile(){
  require_once(__DIR__.'/views/view_profile.php');
  exit();
}

//Controller
post('/login', 'user_login');
function user_login(){
  require_once(__DIR__.'/controllers/controller_login.php');
  exit();
}

//////////////////////////////////   Signup    /////////////////////////////////


//Serve signup page
get('/signup', 'render_signup');
function render_signup(){
    echo 'Got here';
    require_once(__DIR__.'/views/view_signup.php');
    exit();
}

//Serve signup error page
get('/signup/error/:message', 'render_signup_error');
function render_signup_error($message){
  $display_error = $message;
  require_once(__DIR__.'/views/view_signup.php');
  exit();
}

//Controller
post('/signup', 'user_signup');
function user_signup(){
  require_once(__DIR__.'/controllers/controller_signup.php');
  exit();
}


// Error 404
any('/404', 'error404');
function error404(){
  echo 'Page not found';
  exit();
}