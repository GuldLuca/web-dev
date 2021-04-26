<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>
        <?= $page_title ?>
    </title>
</head>
<body>
    <nav>
        <a href="index.php" class="<?php if($header_active=='index'){echo 'active';}?>">Index</a>
        <a href="about-us.php" class="<?php if($header_active=='about'){echo 'active';}?>">About us</a>
        <a href="contact-us.php" class="<?php if($header_active=='contact'){echo 'active';}?>">Contact us</a>
    </nav>