<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo=new PDO($dsn,'root', "");
date_default_timezone_set("asia/Taipei");
session_start();


?>