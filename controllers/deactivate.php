<?php
    require_once 'includes/pdo_connect.php';
    session_start();
try{
  $select_user_stmt = $db->prepare('SELECT * FROM users WHERE email = :email');
  $select_user_stmt->bindValue(':email', $_SESSION['email'], PDO::PARAM_STR);
  $select_user_stmt->execute();
  $user = $select_user_stmt->fetchAll();

  $update_user_stmt = $db->prepare('UPDATE users
                                        SET active = false
                                            WHERE email=:email');
    $update_user_stmt->bindValue(':email', $user['email'], PDO::PARAM_STR);

  session_destroy();
  header('Location: /');
  exit();

}catch(PDOException $ex){
  echo $ex;
}

