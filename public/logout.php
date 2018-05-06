<?php
session_start();
session_destroy();
 if(isset($_COOKIE['username'])){
$email = $_COOKIE['username'];
setcookie('username', $username, time()-1);
 }
echo "<script> window.location = 'log.php'; </script>";

?>