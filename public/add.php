<?php 
include 'config.php';
if(!isset($_SESSION['username'])){
    echo "<script>window.location = 'log.php'</script>";
}
   
   $_SESSION['username'] = $username;

   $username = $_SESSION['username'];
   
   

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8">

<title>My Hot Jobz - Admin Make  Post</title>


<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css"></link>
<link rel="stylesheet" type="text/css" href="lib/css/prettify.css"></link>
<link rel="stylesheet" type="text/css" href="src/bootstrap-wysihtml5.css"></link>





<style type="text/css" media="screen">
	.btn.jumbo {
		font-size: 20px;
		font-weight: normal;
		padding: 14px 24px;
		margin-right: 10px;
		-webkit-border-radius: 6px;
		-moz-border-radius: 6px;
		border-radius: 6px;
	}
</style>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30181385-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
    
     <?php 
    if(isset($_REQUEST['ok'])){
        
       echo $job_title = $_POST['job_title'];
        $job_des = $_POST['job_des'];
        $job_cate = $_POST['job_cate'];
        $job_loc = $_POST['job_loc'];
        $Today = date('y:m:d',time());
        $new = date('F d, Y', strtotime($Today));
         // $insert = mysqli_query($conn, "INSERT INTO jobs (date) VALUES ('$new')") or die (mysqli_error());
        $post = mysqli_query($conn, "INSERT INTO jobs (job_title, job_cate, job_des, job_loc, job_contact, date ) VALUES ('$job_title', '$job_cate', '$job_des', '$job_loc', '$job_contact', '$new')");
        echo "<script>alert('ok')</script>";
       echo "<script>window.location = 'add.php'</script>";
        
    }
    
    ?>
    <br><br><br><br><br><br>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h3>Post an Article/Job</h3><p>
            <form action="" method="post">
                <div class="form-group">
                <select name="job_cate" id="job_cate">
                    <option value="">Job Category</option>
                    <?php 
                    
                    $set = mysqli_query($conn, "SELECT * FROM cate");
                    while($rw = mysqli_fetch_assoc($set)){
                    ?>
                    <option value="<?php echo $rw['job_cate']; ?>"> <?php echo $rw['job_cate']; ?> </option>
                    <?php
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group" id="job_loc">
                    <select name="job_loc">
                    <option value="">Job Location</option>
                    <?php 
                    
                    $set = mysqli_query($conn, "SELECT * FROM location");
                    while($rw = mysqli_fetch_assoc($set)){
                    ?>
                    <option value="<?php echo $rw['job_loc']; ?>"> <?php echo $rw['job_loc']; ?> </option>
                    <?php
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                <input type="text" name="job_title" class="form-control" id="name" placeholder="Job Post Title">
                </div>
        <div class="form-group" >
		<textarea class="textarea" name="job_des" placeholder="Make A Post" style="width: 610px; height: 400px" class = "form-control"></textarea>
        </div>
            <div class="form-group">
            <input type="submit" name="ok" class="btn btn-info btn-lg" value="PUBLISH POST">
            </div>
            </form>
        </div>
	</div>
    
   


<script src="lib/js/wysihtml5-0.3.0.js"></script>
<script src="lib/js/jquery-1.7.2.min.js"></script>
<script src="lib/js/prettify.js"></script>
<script src="lib/js/bootstrap.min.js"></script>
<script src="src/bootstrap-wysihtml5.js"></script>

<script>
	$('.textarea').wysihtml5();
</script>

<script type="text/javascript" charset="utf-8">
	$(prettyPrint);
</script>

</body>
</html>
