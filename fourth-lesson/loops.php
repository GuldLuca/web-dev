<?php
    $letters = ['a', 'b', 'c'];

    // For each loop

    /*foreach($letters as $letter){
        echo $letter;
        echo '<br>';
    }*/

    /*foreach($letters as $index =>$value){
        echo $index;
        echo '<br>';
        echo $value;
        echo '<br>';
    }*/

    //For loop

    /*for($i = 0 ; $i < count($letters) ; $i++){
        echo $letters[$i];
    }*/

    //Assoc array
    $user = ['name' => 'a', 'last_name' => 'b'];

    foreach($user as $key => $value){
        echo "<div>$key $value</div>";
    }


?>