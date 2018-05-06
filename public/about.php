<?php include 'head.php'; ?>

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">About Us</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area recent-property padding-top-40" style="background-color: #FFF;">
            <div class="container">  

                <div class="col-md-9">

                    <div class="" id="contact1">                        
                        <div class="row">
                            
                           
                            <div class="col-sm-12">
                                <h3><i class="fa fa-th"></i> About Us</h3>
                                <p class="text-muted">Myhotjobz.com, a uniquely designed website provides job seekers across the world with job posts from internship to executive/top Positions. <br>

                                Our vision is to be the best job blog that provides the teeming population of job seekers with daily job posts and information that will earn them their dream job.</p>

                                <p class="text-muted">Simply leave the burden of writing your outstanding CVs for us!

                                Our career development platform offer students free access to course materials, UTME/ POST JAMB past questions, interview questions and other online assessments.
                                You can explore our website for sample CVs, cover letters, application letters, project proposals. Appointment letters and lots more.
</p>
                            </div>
                            
                        </div>
                        <!-- /.row --> 
                       
                        <hr>
                       
                        </form>
                    </div>
                </div>
                <!-- /.col-md-9 -->   

                <div class="col-md-3 ">                    
                    <div class="blog-asside-right">  
                        <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Latest Job</h3>
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
        
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
        <script src="assets/js/gmaps.js"></script>        
        <script src="assets/js/gmaps.init.js"></script>

        <script src="assets/js/main.js"></script>

    </body>
</html>