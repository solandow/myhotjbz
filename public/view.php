<?php 
include 'head.php';
$id = $_GET['id'];

$get_det = mysqli_query($conn, "SELECT * FROM jobs WHERE id  = '$id'");
$ff = mysqli_fetch_assoc($get_det);

$job_title = $ff['job_title'];
$job_cate = $ff['job_cate'];
$job_loc = $ff['job_loc'];
$job_des = $ff['job_des'];
$date = $ff['date'];
$hit = $ff['hit'];

$hit = mysqli_query($conn, "UPDATE jobs SET hit = hit + 1 WHERE id = '$id'") or die(mysqli_error());

?>

       >

        <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="blog-lst col-md-9 p0">
                        <section id="id-100" class="post single">

                            <div class="post-header single">
                                <div class="">
                                    <h2 class="animated"><?php echo $job_title; ?></h2>
                                    <div class="title-line "></div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-6">
                                        <p class="author-category">
                                            By <a href="#">ADMIN</a>
                                            in <a href="cate.php?job_cate=<?php echo $row['job_cate']; ?>"><?php echo $job_cate; ?></a>
                                        </p>
                                    </div>
                                    <div class="col-sm-6 right" >
                                        <p class="date-comments">
                                            <a href="#"><i class="fa fa-calendar-o"></i> <?php echo $date; ?></a>
                                            <a href="#"><i class="fa fa-eye"></i> <?php echo $hit; ?> Views</a>
                                        </p>
                                    </div>
                                </div>
                                
                            </div> 

                            <div id="post-content" class="post-body">
                                <p>
                                   <?php echo $job_des; ?>
                                <p>
                                    
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                    
                                    <a class="btn btn-default btn-sm pull-left" data-toggle="modal" data-target="#myModal1">Apply For This Position</a>
                                    
                                   <?php }else{ ?>
                                    
                                    <button class="btn btn-default btn-sm pull-left" data-toggle="modal" data-target="#myModal3">Apply For Job</a>
                                    
                                    
                                    <?php } ?> 
                                    
                                    <?php 
                                    if(!isset($_SESSION['email'])){
                                        //echo "Logged Out";
                                    }else{
                                        //echo "Logged In";
                                    }
                                    
                                    ?>

                            </div>
                            
                        </section> 

                        <section class="about-autor">
                        </section>
                            </form>
                        </section>
                    </div>                    


                    <div class="blog-asside-right col-md-3">
                            <div class="panel panel-default sidebar-menu ">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Latest Jobs</h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                        <ul>
                                            <?php 
                                            
                                    $get_post = mysqli_query($conn, "SELECT * FROM jobs ORDER BY id DESC LIMIT 10"); 
                        
                                    while($row = mysqli_fetch_assoc($get_post)){
                                            ?>
                                        <li>
                                            
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="view.php?id=<?php echo $row['id']; ?>"><?php echo $row['job_title']; ?> </a></h6>
                                                <span class="property-price">Location-<?php echo $row['job_loc']; ?></span>
                                            </div>
                                        </li>
                                            
                                            <?php } ?>

                                    </ul>
                                </div>
                            </div>
                            
                    </div>   
                    
                </div>

            </div>
        </div>

         <?php include 'footer.php'; ?>
        </div>

      <script src="assets/js/modernizr-2.6.2.min.js"></script>

        <script src="assets/js/jquery-1.10.2.min.js"></script> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

        <script type="text/javascript" src="validation.min.js"></script>

       

        <script type="text/javascript" src="reg_script.js"></script>
        
        <script src="assets/js/main.js"></script>




    </body>
</html>


 <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								
								<div class="col-md-12">
									 <h4 class="quick">Login To Apply</h4><hr>
                                   <form action="" method="post" id="register-form">
						<div id="error">
        <!-- error will be showen here ! -->
        </div>
           
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" id="email" />
        <span id="check-e"></span>
        </div>
       
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
        </div>
       
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-saves" id="">
                
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Login To Account
			</button> <span><a href="#" data-toggle="modal" data-target="#myModal2" class="btn btn-success btn-md pull-right">SignUp Here</a></span>
            
        </div>
					</form>							
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>

<?php  
if(isset($_REQUEST['btn-saves'])){
     
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     
     $login = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
     
     $login_count = mysqli_num_rows($login);
     
     if($login_count > 0) {
         
           $_SESSION['email'] = $email;
            setcookie('email', $email, time()+60*60*7);
         $id = $_GET['id'];
         echo "<script>alert('Login Successful');
         
         window.location='view.php?id=$id';</script>";
         
     }else{
         
         echo "<script>alert('Incorrect Username or Password');</script>";
     }
 }

?>


<!---  Register   -->

 <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								
								<div class="col-md-12">
									<h4>Register To Apply</h4><hr>
			                               <form action="" method="post" id="register-forms">
                        
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
                                        <button type="submit" class="btn btn-default " name="btn-save" id="btn-submits">
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


<!-- Apply for the Job -->

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<?php  
                            
                                $id = $_GET['id'];

                                $get_det = mysqli_query($conn, "SELECT * FROM jobs WHERE id  = '$id'");
                                $ff = mysqli_fetch_assoc($get_det);

                                $job_title = $ff['job_title'];
                                $job_contact = $ff['job_contact'];
                                    /////user information to attached with the mail....
                                $_SESSION['email'] = $email;
                                $email = $_SESSION['email'];
                                $get_user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
                                $fetch = mysqli_fetch_assoc($get_user);

                                $name = $fetch['name'];
                                $email = $fetch['email'];
                                $phone = $fetch['phone'];
                            
                                    ?>
								<div class="col-md-12">
									 <h4 class="quick">Application for <i><?php echo $job_title ?></i></h4><hr>
                                   <form action="" method="post" id="register-form">
						<div id="error">
                        <!-- error will be showen here ! -->
                        </div>
           
                        <div class="form-group">
                        <label>Your Cover Letter</label>
                        <textarea name="detail" class="form-control" id="detail" cols="5" placeholder = "Brief details of document" required></textarea>
                        </div>
                        <div class="form-group">
                        <label>Your CV</label>
                        <input type="file" name="image" id="doc" id="doc" required>     
                          </div>
       
        
                        <div class="form-group">
                            <button type="submit" class="btn btn-default" name="btn-saves" id="">
                            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Apply
                            </button> 

                        </div>
					</form>							
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>




        <script src="assets/js/modernizr-2.6.2.min.js"></script>

        <script src="assets/js/jquery-1.10.2.min.js"></script> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>

        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>

        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/price-range.js"></script>

        <script src="assets/js/main.js"></script>
         <script src="assets/js/jquery-1.10.2.min.js"></script> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
        <script type="text/javascript" src="validation.min.js"></script>
        
    </body>
</html>

<script>

    // JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#register-form").validate({
      rules:
	  {
			name: {
		    required: true,
			minlength: 3
			},
			password: {
			required: true,
			minlength: 6,
			maxlength: 15
			},
			cpassword: {
			required: true,
			equalTo: '#password'
			},
			email: {
            required: true,
            email: true
            },
            phone: {
            required: true,
            minlength: 11,
			maxlength: 11
            },
            biz_cate: {
                required: true,
                
            },
          
          biz_offer: {
                required: true,
                
            },
          
          gender: {
              required: true,
              
          },
          
           biz_stage: {
              required: true,
              
          },
          
          biz_addr: {
              required: true,
              minlength: 4
          },
          biz_det:{
              required: true,
              minlength: 4
          }
          
          
	   },
       messages:
	   {
            name: "Please enter Your Full Name",
            password:{
                      required: "Please provide a password",
                      minlength: "Password must be at least have 6 characters"
                     },
            email: { 
                required: "Please Anter An Email Address",
                email: "Please enter a valid Email Address"
            },
			cpassword:{
						required: "Please Retype Your Password",
						equalTo: "Password doesn't match !"
					  },
           
           phone:{
						required: "Please Enter Your Phone Number",
						minlength: "Phone Number must be at least 11 characters",
						maxlength: "Phone Number must be at least 11 characters",
						
					  },
           
           gender: {
           required: "Please Select Your Gender", 
       },
        biz_addr:{
            required: "Please Enter Your  Address",
            minlength: "Your Address is too short"
                },
           biz_det:{
               required: "Please Fill in this space",
               minlength: "Information is too short"
           }
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#register-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'ajax-cusreg.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Processing...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submits").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Creating Acount Account...');
                                     alert('Registeration Successful....');
                                     //window.location.reload(true);
                                   window.location = 'login.php';
									//setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("success1.php"); }); ',2000);
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
                                        
                                        alert('Registeration Successful....');
                                         //window.location.reload(true);
								        window.location = 'login.php';
						//$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
											
									//$("#btn-submits").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Accountsss');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   
	   
	 

});

</script>

