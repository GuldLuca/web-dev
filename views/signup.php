<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>
    <form method="POST" action="/signup" onsubmit="validate(); return false">      
    
        <label for="firstName">First Name</label>
        <div><span class="soft">(Max 50 characters)</span></div>
        <input onclick="clear_error()" type="text" name="firstName" maxlength=50 data-validate="str" data-max="50" data-min="1">

        <label for="lastName">Last Name</label>
        <div><span class="soft">(Max 50 characters)</span></div>
        <input onclick="clear_error()" type="text" name="lastName" maxlength=50 data-validate="str" data-max="50" data-min="1">

        <label for="age">Age</label>
        <div><span class="soft">(Numbers only. 0-150)</span></div>
        <input onclick="clear_error()" type="number" name="age" maxlength=3 data-validate="int" data-min="0" data-max="150" data-min="1">

        <label for="email">E-mail</label>
        <input onclick="clear_error()" type="email" name="email" maxlength=50 data-validate="email" data-min="1">

        <label for="password">Password</label>
        <div><span class="soft">(Min. 8 characters)</span></div>
        <input onclick="clear_error()" type="password" name="password" maxlength=50 data-validate="str" data-min="1">

        <label for="password-repeat">Repeat Password</label>
        <input onclick="clear_error()" type="password" name="password-repeat" maxlength=50 data-validate="str" data-min="1">

        <input type = "submit" name = "submit" value = "Submit"> 
        
    </form>
    <script src="validator.js"></script>
</body>
</html>