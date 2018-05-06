<?php include 'head.php'; ?>
       
        <!-- End page header -->

        <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="blog-lst col-md-9 p0">
                        <section id="id-100" class="post single">

                            <div class="post-header single">
                                <div class="">
                                    <h2 class="">20 interview Tips</h2>
                                    <div class="title-line "></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="author-category">
                                            By <a href="#">ADMIN</a>
                                            in <a href="#">interview</a>
                                        </p>
                                    </div>
                                    <div class="col-sm-6 right" >
                                        <p class="date-comments">
                                            <a href="#"><i class="fa fa-calendar-o"></i> January 27, 2018</a>
                                            <!--<a href="single.html"><i class="fa fa-comment-o"></i> 8 Comments</a> -->
                                        </p>
                                    </div>
                                </div>
                                 <div class="image"> 
                                    <img src="int.jpg" class="img-responsive" alt="Example blog post alt">
                                </div>
                            </div> 

                            <div id="post-content" class="post-body ">
                                <i>Writing a CV is both simple and easy!</i>
                                <p>
                                    <strong>A curriculum Vitae (CV)</strong> 
                                    
 is a type-written document about an individual seeking placement for a job, scholarship, internship, grant, bursary or industrial attachment (training). A CV is also referred to as a resume in North America.<br>
The most important ingredients of your curriculum vitae are your personal information, skills, education and work experience. Myhotjob team (www.myhotjbz.com) describes these ingredients as four (4) pillars of a marketable CV. Your CV must always be attached to your cover letter. A well written CV will earn you your dream job in no time. </p>
                                <p>
                                    Based on the purpose and use of the CV, there are different types of CVs. There are Beginner CVs (for Fresh graduates/undergraduate/IT students), Business/Experienced CV (for a job seeker who has some years of experience in his/her profession or a marketer) and Executive CV (for top professionals with many years of experience and training). 
                                    </p>
                               
                                <p>
                                Your CV determines if your employer would invite you for an interview. It also represent your image before the interview panel. Myhotjobz team describes the following guidelines in writing an attractive and marketable CV.
                                </p>
                             
                                <ol>
                                    <li>Do not copy someone else’s CV. It’s not just a mere impersonation. You are limiting yourself.</li>
                                    <li>Let your CV truthfully represent who you are.</li>
                                    <li>Your CV must always be attached to a cover letter (except otherwise stated in the job advert).</li>
                                    <li>Avoid any spelling or grammatical errors in your CV before submission.</li>
                                    
                                </ol>
                                
                                <p>
                                To get more of this tips, Pay a token of &#8358;1,000 to Myhotjbz.com Admin's account. Below are the information.
                                </p>

                                <blockquote>
                                    <p>
                                       
                                        Bank Name: <b>Guarantee Trust Bank</b> <br>
                                        Account Name: <b>FAROHUNBI SAMUEL TOBI</b> <br>
                                        Account Number: <b>0035512113</b> <br>
                                        Amount: <b>&#8358;1,000 (One Thousand Naira Only)</b><br>
                                        Phone Number: <b>+2347039149150</b><br>
                                        
                                    </p>
                                </blockquote>
  
                                <p>
                                After successful payment, Send your teller number to the phone number above with a title of <b><i>Job Interview</i></b>. One of Myhotjbz.com team will contact you.
                                </p>
                            </div>
                               

                        </section> 

                        <section class="about-autor">

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
                                                <h6> <a href="single.html"><?php echo $row['job_title']; ?> </a></h6>
                                                <span class="property-price">Location-<?php echo $row['job_loc']; ?></span>
                                            </div>
                                        </li>
                                   <?php   }  ?>
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

        <script src="assets/js/main.js"></script>

    </body>
</html>