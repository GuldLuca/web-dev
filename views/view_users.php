<?php
    try{
        require_once 'includes/pdo_connect.php';
        $sql = 'SELECT firstName, lastName FROM users
                ORDER BY age';
    }
    catch(Exception $e){
        $error = $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>
    <?php 
    
        if($db){
            echo '<p>Connection successful</p>';

        }
        elseif (isset($error)){
            echo "<p>$error</p>";
        }

    ?>

    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
        </tr>
        <?php
            foreach ($db->query($sql) as $row) { ?>
        <tr>
            <td><?php echo $row['firstName'];?></td>
            <td><?php echo $row['lastName'];?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
