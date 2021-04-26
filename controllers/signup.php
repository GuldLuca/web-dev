<?php
    require_once 'includes/pdo_connect.php';

try{

    //TODO: Check if user is active, if not activate account on login
    $insert_stmt = $db->prepare('INSERT INTO users(firstName, lastName, age, email, pass)
                                    VALUES(:firstName, :lastName, :age, :email, :pass)');

    $insert_stmt->bindValue(':firstName', $_POST['firstName'], PDO::PARAM_STR);
    $insert_stmt->bindValue(':lastName', $_POST['lastName'], PDO::PARAM_STR);
    $insert_stmt->bindValue(':age', $_POST['age'], PDO::PARAM_INT);
    $insert_stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $insert_stmt->bindValue(':pass', $_POST['password'], PDO::PARAM_STR);

    $select_stmt = $db->prepare('SELECT * FROM users
                                    WHERE email = :email');
    $select_stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);

    $select_stmt->execute();

    $user = $select_stmt->fetchAll();

    if(count($user) > 0){
        header('Location: /signup/error');
        exit();
    }
    $insert_stmt->execute();
    header('Location: /login');
    exit();
}
catch(Exception $e){
    $error = $e->getMessage();
}
?>