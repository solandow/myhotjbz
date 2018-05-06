<?php  
 include 'config.php';
 if($_POST){
     
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     
     $login = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
     
     $login_count = mysqli_num_rows($login);
     
     if($login_count > 0) {
         
           $_SESSION['email'] = $email;
            setcookie('email', $email, time()+60*60*7); 
         echo "register";
         
     }else{
         
         echo "1";
     }
 }
     
     ?>