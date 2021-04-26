<?php
    $user = ['name' => 'A', 'last_name' => 'B'];
    echo 'Hi ' . $user['name'];
    echo "</br>";
    echo "Hi {$user['name']} {$user['last_name']}";
    echo "</br>";

    $user['age'] = 1;

    echo json_encode($user);

    unset($user['age']);

    echo "</br>";

    echo json_encode($user);

    $user = ['name' => 'A', 'phones' => ['1', '2']];
    
    echo "</br>";

    echo $user['phones'][1];
?>