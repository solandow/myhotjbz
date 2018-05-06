<?php include 'head.php'; ?>

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Contact Us</h1>               
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
                            
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-6">
                                <h3><i class="fa fa-phone"></i> Call center</h3>
                                <p class="text-muted">You can Reach Us on this line for enquiry</p>
                                <p><strong>+2348113895192; +2349028583990</strong></p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-6">
                                <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                <p class="text-muted">Please feel free to write an email to us, we'll really appreciate it.</p>
                                <ul>
                                    <li><strong><a href="mailto:myhotjobz@gmail.com">myhotjobz@gmail.com</a></strong>   </li>
                                </ul>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row --> 
                       
                        <hr>
                       <!-- <h2>Contact form</h2>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea id="message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                                </div>
                            </div>
                            <!-- /.row -->
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