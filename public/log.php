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
                            <h2>Admin Login : </h2> 
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email">Username</label>
                                    <input type="text" class="form-control" id="email" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="log" class="btn btn-default"> Log in</button>
                                </div>
                            </form>                            
                        </div>
                        
                    </div>
                </div>

            </div>
        </div> 

<?php  

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

    </body>
</html>