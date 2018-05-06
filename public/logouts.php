<?php
session_start();
session_destroy();
 if(isset($_COOKIE['email'])){
$email = $_COOKIE['email'];
setcookie('email', $email, time()-1);
 }
echo "<script> window.location = 'index.php'; </script>";

?>