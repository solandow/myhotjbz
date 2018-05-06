<?php 
include 'config.php';

?>
<?php include 'header.php' ?>
        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Hello : <span class="orange strong">Farohunbi Oluwatobi</span></h1> 
                        
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
                                <h4 class="text-center">Job Posts</h4>
                                <div class="col-sm-12 ">
                                    <div class="box-body table-responsive no-padding">
                                  <table class="table table-hover">
                                    <tr>
                                      <th>Title</th>
                                      <th>Category</th>
                                      <th>Location</th>
                                      <th>Hits</th>
                                      <th>Date Posted</th>
                                      <th>Action</th>
                                    </tr>
                                      
                                      <?php 
                                      $get_item = mysqli_query($conn, "SELECT * FROM jobs ORDER BY id DESC");
                                        $count = mysqli_num_rows($get_item);
                                        while($row = mysqli_fetch_assoc($get_item)){ ?>
                                            
                                      
                                    <tr>
                                      <td><?php echo $row['job_title']; ?></td>
                                      <td><?php echo $row['job_cate']; ?></td>
                                      <td><?php echo $row['job_loc']; ?></td>
                                      <td><?php echo $row['hit']; ?></td>
                                      <td><?php echo $row['date']; ?></td>
                                      <td>
                                          <a class="btn btn-success btn-xs">View</a> 
                                          <a class="btn btn-warning btn-xs">Edit</a> 
                                          <a class="btn btn-Delete btn-xs">Delete</a> 
                                    </td>
                                    </tr>
                                      <?php 
                                        }
                                      ?>
                                    </table>
                                </div>
                            </div>

                            <div class="clear">
                                <br>
                                <hr>
                                <br> 
                                <form action = "" method="post">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label>Add Category </label>
                                        <input  type="text" name="job_cate" class="form-control" placeholder="Add Job Location" required>
                                    </div>
                                <br>
                    <input type='submit' class='btn btn-finish btn-primary' name='cate' value='Add Category' />
                                </div>
                                </form>
                                
                                <?php 
                                if($_POST['cate']){
                                    $job_cate = $_POST['job_cate'];
                                    
                                    
                                        $in = mysqli_query($conn, "INSERT INTO cate (job_cate)VALUES('$job_cate')") or die(mysqli_error());
                                        
                                        echo "<script>alert('Action Successful');</script>";
                                    
                                    
                                }
                                
                                ?>
                                <form action="" method="post">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label>Add Location </label>
                                        <input  type="text" name="job_loc" class="form-control" placeholder="Add Job Location" required>
                                    </div>
                                <br>
                            <input type='submit' class='btn btn-finish btn-primary' name='location' value='Add Location' />
                                </div>
                                </form>
                                
                                <?php 
                                if($_POST['location']){
                                    $job_loc = $_POST['job_loc'];
                                    
                                   
                                        $in = mysqli_query($conn, "INSERT INTO location (job_loc)VALUES('$job_loc')") or die(mysqli_error());
                                        
                                        echo "<script>alert('location Added Successful');</script>";
                                  
                                    
                                }
                                
                                ?>
 
                            </div>
                    
                            <br>
                    </form>

                </div>
            </div><!-- end row -->

        </div>
    </div>


          <!-- Footer area-->
        <div class="footer-area">


            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                            <span> (C) <a href="http://www.KimaroTec.com">KimaroTheme</a> , All rights reserved 2016  </span> 
                        </div> 
                        <div class="bottom-menu pull-right"> 
                            <ul> 
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.2s">Home</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.3s">Property</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.4s">Faq</a></li>
                                <li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.6s">Contact</a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="assets/js//jquery-1.10.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>
        <script src="assets/js/easypiechart.min.js"></script>
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

	