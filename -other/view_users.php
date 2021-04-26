<?php
require_once(__DIR__.'/../db.php');

$q = $db->prepare('SELECT * FROM users');
$q->execute();
$rows = $q->fetchall();

echo $rows;

