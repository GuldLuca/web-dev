<?php
  ini_set('display_errors', 1);
    require_once 'includes/pdo_connect.php';

try{
  $select_email_stmt = $db->prepare('SELECT * FROM users WHERE email = :email');
  $q->bindValue(':email', $_POST['email']);
  $select_email_stmt->execute();
  $user_email = $select_email_stmt->fetchAll();

  if( count($user_email) == 0 || !password_verify($POST['password'], $user['pass'])){
    header('Location: /');
    exit();
  }
  session_start();
  $_SESSION['email'] = $_POST['email'];
  header('Location: /admin');
  exit();

}catch(PDOException $ex){
  echo $ex;
}




