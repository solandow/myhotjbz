<?php  
 include 'config.php';
 if($_POST){
     //$ref_id = $_POST['ref_id'];
     //$ref_email = $_POST['ref_email'];
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $name = mysqli_real_escape_string($conn, $_POST['name']);
     
     $gender = mysqli_real_escape_string($conn, $_POST['gender']);
     $biz_addr = mysqli_real_escape_string($conn, $_POST['biz_addr']);
    
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     $date = mysqli_real_escape_string($conn, $_POST['date']);
     
     $phone = mysqli_real_escape_string($conn, $_POST['phone']);
     
     $get_email = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
     $get_email_count = mysqli_num_rows($get_email);
     if($get_email_count > 0){
         echo "1";
     }else{
         
          echo "registered";
         
         $Today = date('y:m:d',time());
            $new = date('l, F d, Y', strtotime($Today));
          
         $reg = mysqli_query($conn, "INSERT INTO user (name, email, password, gender, biz_addr, phone, date) VALUES ('$name', '$email', '$password', '$gender', '$biz_addr', '$phone', '$new')") or die(mysql_error());
         
        $to = "$email";
       	$subject = "DoNotReply - Registeration Confirmation From Bizallianz";
       	$text = " 
        Your registeraion was successful. 

       	Click the Link Below to Activate your email account

       	===================================================

       	http://bizallianz.com?email=$email

       	===================================================	



       	If you did not request for this mail, please disregard it.

       	Bizallianz Team

       	";

       	$header = "From: BizAllianz". "\r\n" . "CC: info@bizzallianz.com";

       	mail($to,$subject,$text,$header);


         
        
         
     }
 }
  
?>