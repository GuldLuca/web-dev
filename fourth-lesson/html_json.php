<?php

    //Show errors on
    ini_set('display_errors', 1);
    $user = new stdClass(); // JSON

    $user->name = 'a';
    
    //echo $user->name;

    $user->lastname = 'b';
    //echo "Hi $user->name $user->lastname";

    $user->age = '1';
    //Show json object as string
    echo json_encode($user);

    //Remove key and pair from json object
    unset($user->age);

    echo json_encode($user);

    

?>