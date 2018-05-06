<?php 
include 'head.php';

$Today = date('y:m:d',time());
			$new = date('l, F d, Y', strtotime($Today));
			$new;
	$get_info = mysqli_query($conn, "SELECT * FROM stat WHERE name = 'Homepage' AND date = '$new'");
	$get_info_count = mysqli_num_rows($get_info);
	if($get_info_count > 0){
		$Today = date('y:m:d',time());
		$new = date('l, F d, Y', strtotime($Today));
		$new;		
	$update = mysqli_query($conn, "UPDATE stat SET count = count + 1 WHERE name = 'Homepage' AND date = '$new'") or die(mysqli_error());
	}else{
			$Today = date('y:m:d',time());
			$new = date('l, F d, Y', strtotime($Today));
			$new;
		$newday = mysqli_query($conn, "INSERT INTO stat (name, count, date) VALUES ('Homepage', '1', '$new')") or die(mysqli_error());
	}

?>
        <div class="page-head"> 
            <div class="container"><br>
                <div class="search-form col-md-10 col-md-offset-1">
<center>
                            <form action="result.php" class=" form-inline">
                               
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Key word">
                                </div>
                                <div class="form-group">                                   
                                    <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">

                                         <?php 
                    
                    $set = mysqli_query($conn, "SELECT * FROM location");
                    while($rw = mysqli_fetch_assoc($set)){
                    ?>
                    <option value="<?php echo $rw['job_loc']; ?>"> <?php echo $rw['job_loc']; ?> </option>
                    <?php
                        }
                    ?>                                    </select>
                                </div>
                                <div class="form-group">                                     
                                    <select id="basic" class="selectpicker show-tick form-control">
                                        <?php 
                    
                    $set = mysqli_query($conn, "SELECT * FROM cate");
                    while($rw = mysqli_fetch_assoc($set)){
                    ?>
                    <option value="<?php echo $rw['job_cate']; ?>"> <?php echo $rw['job_cate']; ?> </option>
                    <?php
                        }
                    ?>  

                                    </select>
                                </div>
                                <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>

                                                 

                            </form>
    </center>
                        </div>
            </div>
        </div>
        <!-- End page header -->

        <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">   
                <div class="row">
                    <div class="blog-lst col-md-9">
                        <?php 
                        $job_loc = $_GET['job_loc'];
                        $get_post = mysqli_query($conn, "SELECT * FROM jobs WHERE job_loc = '$job_loc' ORDER BY id DESC
                        
                        "); 
                        
                        while($row = mysqli_fetch_assoc($get_post)){
                        ?>
                        <section class="post">
                            <div class="text-center padding-b-50">
                                <h2 class="animated"><a href="view.php?id=<?php echo $row['id']; ?>"><?php echo $row['job_title']; ?></a></h2>
                                <div class="title-line"></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="author-category">
                                       By <a href="#">Admin</a>
                                        in <a href="cate.php?job_cate=<?php echo $row['job_cate']; ?>"><?php echo $row['job_cate']; ?></a>
                                    </p>
                                </div>
                                <div class="col-sm-6 right" >
                                    <p class="date-comments">
                                        <a href="#"><i class="fa fa-calendar-o"></i> <?php echo $row['date']; ?></a>
                                        <a href="#"><i class="fa fa-eye"></i> <?php echo $row['hit']; ?> seen</a>
                                    </p>
                                </div>
                            </div>
                           
                            <p class="intro"><?php  
                            $info = substr($row['job_des'], 0, 300);
                            echo $info;  echo "...";                                
                                ?></p>
                            <p class="read-more">
                                <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-default btn-border">Continue reading</a>
                            </p>
                        </section>   
<?php } ?>
                        
                    </div> 

                    <div class="blog-asside-right col-md-3">
                       <!-- <div class="panel panel-default sidebar-menu " >
                            <div class="panel-heading">
                                <h3 class="panel-title">Text widget</h3>
                            </div>
                            <div class="panel-body text-widget">
                                <p>Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage mr be. Hold do at tore in park feet near my case.
                                </p>

                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu">
                            <div class="panel-heading">
                                <h3 class="panel-title">Search</h3>
                            </div>
                            <div class="panel-body">
                                <form role="search">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Search" type="text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-smal">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>-->

                        
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
                                            
                                            <?php } ?>

                                    </ul>
                                </div>
                            </div>
                            

                        <div class="panel sidebar-menu ">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tags</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="tag-cloud">
                                    <li><a href="#"><i class="fa fa-tags"></i> html5</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> css3</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> jquery</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> ajax</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> php</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> responsive</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> visio</a> 
                                    </li>
                                    <li><a href="#"><i class="fa fa-tags"></i> bootstrap</a> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php  include 'footer.php'; ?>

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

