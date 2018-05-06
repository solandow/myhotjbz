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
                            <h2>Register Here </h2> 
                            <form action="" method="post" id="register-forms">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname">
                                </div>
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname">
                                </div>
                                 <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="cpassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="cpassword" name="cpassword">
                                </div>
                                <div class="form-group">
                                    <label for="password">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="log" class="btn btn-default" id="btn-submit"> Register</button>
                                </div>
                            </form>                            
                        </div>
                        
                    </div>
                </div>

            </div>
        </div> 

<?php  
/*
if(isset($_REQUEST['log'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $loin = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
    $loin_c = mysqli_num_rows($loin);
    
    if($loin_c > 0){
        session_start();
        $username = $_SESSION['username'];
        echo "<script>window.location = 'user.php'</script>";
    }else{
        echo "<script>alert('Username or password is incorrect')</script>";
         echo "<script>window.location = 'log.php'</script>";
    }
}
*/
?>

<?php include 'footer.php'; ?>
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
<script>
$(document).ready(function(){
    
    /* validation */
    var nameregex = /^[a-zA-Z ]+$/;
         
         $.validator.addMethod("vfname", function( value, element ) {
             return this.optional( element ) || nameregex.test( value );
         }); 
    
    var nameregex = /^[a-zA-Z ]+$/;
         
         $.validator.addMethod("vlname", function( value, element ) {
             return this.optional( element ) || nameregex.test( value );
         }); 
    
    
        var nameregex = /^[0-9 ]+$/;
         
         $.validator.addMethod("vphone", function( value, element ) {
             return this.optional( element ) || nameregex.test( value );
         });
    
    $('#register-forms').validate({
        rules:
        {
            fname:{
                require: true,
                minlength: 3,
                vfname: true
            }, 
            lname:{
                require: true,
                minlength: 3,
                vlname: true
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
            phone:{
                require: true,
                minlength: 11,
                maxlength: 11,
                vphone: true
                
            },
            
            messages:
            {
                fname:{
                    require: "First Name is Required",
                    minlength: "Fist Name is too Short",
                    vfname: "First Name is not Valid"
                }
            }
            
            
        }
    });
   
});
</script>
    </body>
</html>