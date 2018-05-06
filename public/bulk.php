<?php  
include 'config.php';

include 'header.php';
 ?> 
 <div class="container">
<form action="" method="POST">
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mail Content Here</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="8"></textarea>
  </div>

  <div class="form-group">
    <input type="submit" name="send" class="btn btn-primary" value="Send Mail">
  </div>
</form>

<?php  
if(isset($_REQUEST['send'])){
  $messages = $_POST['message'];

  $email_list = file("elite.txt");

  $total_email = count($email_list);

  echo "<script>alert('$total_email');</script>";

  for($counter=0; $counter<$total_email; $counter++){
    $email_list[$counter] = trim($email_list[$counter]);
  }

  $to = implode(",", $email_list);

  //$subject = "My EMAIL TEST";
  $message = $messages;

  //$to      = 'nobody@example.com';
  $subject = 'Latest Job Posts From Myhotjbz.com';
  $message = $messages;
  $headers = array(
    'From' => 'Myhotjbz@gmail.com',
    'Reply-To' => 'Myhotjbz@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
);


  if(mail($to, $subject, $message)){
    echo "Good, sent";
  }else{
    echo "Failed";
  }
  
}
?>
</htm>