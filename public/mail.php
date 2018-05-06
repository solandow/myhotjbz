
<!DOCTYPE html>
<html>
<head>
	<title>Mail System</title>

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
	<h3>Send Bulk Mail</h3>
	<form action="" method="post">
		<div class="form-group">
		  <label for="comment">Mail Content: </label>
		  <textarea class="form-control" rows="5" id="comment" name="message" required></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="send" class="btn btn-info" value="Submit Mail">
		</div>
	</form>
		</div>
	</div>

</body>
</html>

<?php  
if(isset($_REQUEST['send'])){
	$messages = $_POST['message'];

	$email_list = file("elite.txt");

	$total_email = count($email_list);

	for($counter=0; $counter<$total_email; $counter++){
		$email_list[$counter] = trim($email_list[$counter]);
	}

	$to = implode(",", $email_list);

	$subject = "Hot And Latest Job Recommended For You....";
	$message = $messages;

	if(mail($to, $subject, $message)){
		echo "<script>alert('Maill Sent to all $total_email Emails Available' );</script>";
	}else{
		echo "Failed";
	}
	
}
?>