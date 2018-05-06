<?php 
include 'config.php'; 

if(!isset($_SESSION['username'])){
    echo "<script>window.location = 'log.php'</script>";
}
   
   $_SESSION['username'] = $username;

   $username = $_SESSION['username'];
   
?>

<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
    <head>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My Hot Jobz | Admin Page</title>
        <meta name="description" content="company is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template, job, blog, online, my, dream, my dream job">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>-->

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <script src = "js/angular.js"></script>
		<script src = "js/app.js"></script>
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
    </head>
    <body>

        
        <!-- Body content -->

        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="pe-7s-call"></i> +2347039149150</span>
                                <span><i class="pe-7s-mail"></i> jobs@mydreamjob.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
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
                       <!--<button class="navbar-btn nav-button  login" onclick=" window.open('register.html')">Login</button>
                        <button class="navbar-btn nav-button " onclick=" window.open('submit-property.html')">Submit</button>-->
                        
                        <button class="navbar-btn nav-button" data-toggle="modal" data-target="#myModal1">
                            Upload Materials</button>
                        <button class="navbar-btn nav-button login" data-toggle="modal" data-target="#myModal2">Upload course Material</button>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="wow " ><a class="" href="user.php">Home</a></li>
                        <li class="wow " ><a class="" href="bulk.php">Send Email</a></li>
                        <li class="wow "><a href="doc.php">Documents/Materials</a></li>
                       
                        <li class="wow "><a href="posts.php">Make A Post</a></li>
                        <li class="wow "><a href="logout.php">LogOut</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->

        
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								
								<div class="col-md-12">
									<h3>Upload Material</h3>
				                    <form action="insert.php" method="POST" enctype="multipart/form-data">
                                    <div id="error">
                                        
                                            <!-- error will be showen here ! -->
                                    </div>
                                        
                                         <div class="form-group">
                                        <label>Category for Material</label>
                                    <select class="form-control" name="type" required>
                                    <option>Select Category for Material</option> 
                                    <option value="Material">General Material</option>
                                    <option value="UTME">UTME/JAMB Material</option>
                                    <option value="POST">POST JAMB/UTME Material</option>
                                    <option value="int">Interview Material</option>
                                    <option value="GMAT">GMAT Material</option>
                                    </select>
                                    <span id="check-e"></span>
                                    </div>
                                        
                                    <div class="form-group">
                                        <label>Document Name/Title</label>
                                    <input type="text" class="form-control" placeholder="Document Name" name="title"  id="title" required>
                                    <span id="check-e"></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Brief Details of Documnet</label>
                                    <textarea name="detail" class="form-control" id="detail" cols="5" placeholder = "Brief details of document" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Document</label>
                                    <input type="file" name="image" id="doc" id="doc" required>     
                                    </div>
                                    <hr />

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default" name="btn-save" id="post">
                                        <span class="glyphicon glyphicon-upload"></span> &nbsp; Upload Document
                                        </button>

                                    </div>
                                    </form>			
									
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
        
        
         <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								
								<div class="col-md-12">
									<h3>Upload Course Material </h3>
				                    <form action="course.php" method="POST" enctype="multipart/form-data">
                                    <div id="error">
                                        
                                            <!-- error will be showen here ! -->
                                    </div>
                                    <div class="form-group">
                                        <label>Document Name/Title</label>
                                    <input type="text" class="form-control" placeholder="Document Name" name="title"  id="title" required>
                                    <span id="check-e"></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Brief Details of Document</label>
                                    <textarea name="detail" class="form-control" id="detail" cols="5" placeholder = "Brief details of document" required></textarea>
                                    </div>
                                        
                                    <div class="form-group">
                                        <label>Institution</label>
                                        <select name="type" id="lunchBegins" class="selectpicker" title="Select Institution">
                                   
                                         <?php 
                    
                    $set = mysqli_query($conn, "SELECT * FROM university");
                    while($rw = mysqli_fetch_assoc($set)){
                    ?>
                    <option value="<?php echo $rw['accro']; ?>"> <?php echo $rw['school']; ?> </option>
                    <?php
                        }
                    ?>
                                    </select>
                                </div>
                                        
                                    <div class="form-group">
                                        <label>Document</label>
                                    <input type="file" name="image" id="doc" id="doc" required>     
                                    </div>
                                    <hr />

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default" name="btn-save" id="post">
                                        <span class="glyphicon glyphicon-upload"></span> &nbsp; Upload Document
                                        </button>

                                    </div>
                                    </form>			
									
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
        
        
         