<?php
    $letters = [['id' => 0, 'name' => 'a'], ['id' => 1, 'name' => 'b']];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="letters">
        <?php
            foreach ($letters as $index=>$letter) {
        ?>
        <div id="letter">
            ID <?php echo $index?> NAME <?php echo $letter?>
        </div>

        <?php
        }
        ?>
    </div>
    
</body>
</html>