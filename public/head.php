<?php 

include 'config.php'; 

if(!isset($_SESSION['email'])){
    
    
    //echo "<script>window.location = 'login.php'</script>";
   //echo "LOGOUT"; 
    
}else{
   

$email = $_SESSION['email'];
$get_user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
 $fetch = mysqli_fetch_assoc($get_user);

 $name = $fetch['name'];
$email = $fetch['email'];
$phone = $fetch['phone'];
   
   
    
}

?>
<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
    <head>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My Hot Jobz | Best Online Job Blog</title>
        <meta name="description" content="Best online Job Blog for news and job openings">
        <meta name="author" content="myhotjobz.com">
        <meta name="keyword" content="job, blog, online, my, dream, my dream job Jot Jobs in Nigeria">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="style.css">
        
         
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="pe-7s-call"></i> +2347039149150</span>
                                <span><i class="pe-7s-mail"></i> myhotjobz@gmail.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="facebook.com/myhotjobz"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <!--<li><a href="#"><i class="fa fa-vine"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>          
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                       
                        <!--<button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('submit-property.html')">Submit</button>-->
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="wow " ><a class="" href="index.php">Home</a></li>
                         <!--<li class="wow fadeInDown" ><a class="" href="info.php">ReWrite Your CV</a></li>
                         <li class="wow" ><a class="" href="int.php">Interview Tip</a></li>-->
                        <li class="dropdown ymm-sw " >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" >Categories <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                    <?php 
                    $set = mysqli_query($conn, "SELECT * FROM cate");
                    while($rw = mysqli_fetch_assoc($set)){
                    ?>
                    <li>
                                    <a href="cate.php?job_cate=<?php echo $rw['job_cate']; ?>"><?php echo $rw['job_cate']; ?></a>
                                </li>
                    <?php
                        }
                    ?> 
                            </ul>
                        </li>
                        
                        <li class="dropdown ymm-sw " >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" >Location <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <?php 
                    
                    $set = mysqli_query($conn, "SELECT * FROM location");
                    while($rw = mysqli_fetch_assoc($set)){
                    ?>
                                 <li>
                                    <a href="loc.php?job_loc=<?php echo $rw['job_loc']; ?>"><?php echo $rw['job_loc']; ?></a>
                                </li>
                    
                    <?php
                        }
                    ?>
                            </ul>
                        </li>

                        
                  <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Student Corner <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li>
                                    <a href="uni.php">Course Materials</a>
                                </li>
                                <li>
                                    <a href="student.php?type=Material">General Materials</a>
                                </li>
                                <li>
                                    <a href="student.php?type=UTME">UTME/JAMB Materials</a>
                                </li>
                                <li>
                                    <a href="student.php?type=POST">POST JAMB/UTME Materials</a>
                                </li>
                                <li>
                                    <a href="student.php?type=int">Interview Questions</a>
                                </li>
                                <li>
                                    <a href="student.php?type=GMAT">GMAT Questions</a>
                                </li>
                            </ul>
                        </li>

                         <li class="wow fadeInDown" ><a class="" href="about.php">About Us</a></li>
                         <li class="wow fadeInDown" ><a class="" href="contact.php">Contact Us</a></li>
                        
                        <?php if(isset($_SESSION['email'])){ 
                        
                        $_SESSION['email'] = $email;
                        $email = $_SESSION['email'];
                        $get_user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
                         $fetch = mysqli_fetch_assoc($get_user);

                        $name = $fetch['name'];
                        $email = $fetch['email'];
                        $phone = $fetch['phone'];

                        //echo "LOG IN!";

                        ?>
                        
                          
                               <!-- When a user is logged in...  -->
                  <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="index.php" class="dropdown-toggle active" data-toggle="dropdown" data-hover="dropdown" data-delay="200"><?php echo $name; ?></php><b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                
                                <li>
                                    <a href="jobs.php">Post Job</a>
                                </li>
                                <li>
                                    <a href="viewjobs.php">Jobs Posted</a>
                                </li>
                               
                                
                                <li>
                                    <a href="logouts.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                            
                        <?php }else{ ?>
                        
                     
                        
                        
                        
                       <!--- <a href="login.php" class="navbar-btn nav-button btn btn-default"  >Login</a>
                        
                        <button class="navbar-btn nav-button login" data-toggle="modal" data-target="#myModal2" >Post Job</button>-->
                        <?php } ?>

                        <!--<li class="wow fadeInDown"><a href="contact.html">Contact</a></li>-->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->



 <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								
								<div class="col-md-12">
									<h4>Register To Post Job</h4><hr>
			                               <form action="" method="post" id="register-form">
                        
                        <div id="error">
        <!-- error will be showen here ! -->
                                       </div>         
                               <div class="form-group">  
        <input type="text" class="form-control" placeholder="Enter Your Full Name" name="name" id="name" />
        </div>
           
           <div class="form-group">
        <input type="email" class="form-control" placeholder="Enter Your Email address" name="email" id="email" />
        <span id="check-e"></span>
        </div>
       
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Enter Your Password" name="password" id="password" />
        </div>
        
            
         <div class="form-group">  
        <select name="gender" class="form-control" id="gender">
        <option value="">Select Gender</option>
        <option>Male</option>
        <option>Female</option>
        </select>
        </div>
         
           
        <div class="form-group">  
        <input type="text" class="form-control" placeholder="Enter Your Address" name="biz_addr" id="biz_addr" />
        </div>
           
           <div class="form-group">  
           <input type="text" class="form-control" placeholder="Enter Your Phone Number" name="phone" id="phone" />
        </div>
           
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default " name="btn-save" id="btn-submit">
                                        <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
                                        </button>

                                         
                                    </div>
                                    </form>			
									
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
