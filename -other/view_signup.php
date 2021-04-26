<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>

    <?php
        if( isset($display_error) ){
    ?>
    <div>
      ERROR <?= urldecode($display_error) ?>
    </div>
    <?php
        }
    ?>

    <form action="/signup" method="POST">
        <input type="text" name="first-name" placeholder="First name">
        <input type="text" name="last-name" pladceholder="Last name">
        <input type="phone" name="phone" placeholder="Phone">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password-repeat" placeholder="Repeat password">
        <button>Sign Up</button>
    </form>
    
</body>
</html>