<?php 
include 'config.php';
if(!isset($_SESSION['username'])){
    echo "<script>window.location = 'log.php'</script>";
}
   
   $_SESSION['username'] = $username;

   $username = $_SESSION['username'];
   
   

?>
<?php include 'header.php' ?>
        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Hello : <span class="orange strong">Farohunbi Oluwatobi</span></h1> 
                        <a href="logout.php">LOGOUT</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header --> 

        <!-- property area -->
        <div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 profiel-container">

                        <form action="" method="">
                            <!--<div class="profiel-header">
                                <h3>
                                    <b>BUILD</b> YOUR PROFILE <br>
                                    <small>This information will let us know more about you.</small>
                                </h3>
                                <hr>
                            </div>-->

                            <div class="clear">
                                <h4 class="text-center">Documents Uploaded</h4>
                            </div>
                            <div class="clear">
 
                           
                            </div>
                   
                            
                    </form>
                        <hr>
                            <div class="col-sm-12">
                                    <div class="form-group">
                                        
                                        <div class="box-body table-responsive no-padding">
                                  <table class="table table-hover">
                                    <tr>
                                      <th>Title</th>
                                      <th>University</th>
                                      <th>Date Posted</th>
                                    </tr>
                                      <?php  $fetch = mysqli_query($conn, "SELECT * FROM docs WHERE type !='Material'");
                                      while($row = mysqli_fetch_assoc($fetch)){   ?>
                                       <tr>
                                      <td><?php echo $row['title']; ?></td>
                                      <td><?php echo $row['type']; ?></td>
                                      <td><?php echo $row['date']; ?></td>
                                      </tr>
                                      <?php
                                          
                                      }
                                      ?>
                                     
                                    </table>
                                    </div>
                                    </div>
                                <br>
                                </div>
                </div>
                    
                     
                               
            </div><!-- end row -->

        </div>
    </div>


         <?php include 'footer.php'; ?>
        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="assets/js//jquery-1.10.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>
        
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/price-range.js"></script> 
        <script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/wizard.js"></script>

        <script src="assets/js/main.js"></script>


</body>
</html>