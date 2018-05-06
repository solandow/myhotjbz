<?php include 'head.php'; ?>
        <!--<div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Home New account / Sign in </h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->
 

        <!-- register-area -->
        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

              

                <div class="col-md-6 col-md-offset-3">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Login To Your Account </h2> 
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="login" class="btn btn-default"> Log In</button>
                                </div>
                            </form>                            
                        </div>
                        
                    </div>
                </div>

            </div>
        </div> 

<?php include 'footer.php'; ?>

<?php  
if(isset($_REQUEST['login'])){
     
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     
     $login = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
     
     $login_count = mysqli_num_rows($login);
     
     if($login_count > 0) {
         
           $_SESSION['email'] = $email;
            setcookie('email', $email, time()+60*60*7);
         //$id = $_GET['id'];
         echo "<script>window.location='jobs.php';</script>";
         
     }else{
         
         echo "1";
     }
 }

?>

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
        <!--<script type="text/javascript" src="reg_script.js"></script>-->
        
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

