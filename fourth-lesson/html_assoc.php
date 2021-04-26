<?php
    $people = [
        ['id' => 'a1','name' => 'A', 'lastname' => 'AA'],
        ['id' => 'b2','name' => 'B', 'lastname' => 'BB'],
        ['id' => 'c3','name' => 'C', 'lastname' => 'CC']
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="users">

        <?php
            foreach ($people as $person) {
        ?>
        <div class="user">
            <div>ID: <?php echo $person['id']?></div>
            <div>NAME: <?php echo $person['name']?></div>
            <div>LAST NAME: <?php echo $person['lastname']?></div>
        </div>

        <?php
        }
        ?>

    </div>
</body>
</html>