<?php 


include 'config.php'; 

if(!isset($_SESSION['email'])){
    
    
    //echo "<script>window.location = 'login.php'</script>";
   //echo "LOGOUT"; 
    
}else{
   

$email = $_SESSION['email'];
$get_user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
 $fetch = mysqli_fetch_assoc($get_user);

 $name = $fetch['name'];
$email = $fetch['email'];
$phone = $fetch['phone'];
   
   
    
}



?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My Hot Jobz | Make A Job Post</title>
        <meta name="description" content="company is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template, job, blog, online, my, dream, my dream job">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>-->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    
        
        
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/froala_editor.css">
  <link rel="stylesheet" href="css/froala_style.css">
  <link rel="stylesheet" href="css/plugins/code_view.css">
  <link rel="stylesheet" href="css/plugins/image_manager.css">
  <link rel="stylesheet" href="css/plugins/image.css">
  <link rel="stylesheet" href="css/plugins/table.css">
  <link rel="stylesheet" href="css/plugins/video.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
  

  <style>
    body {
      text-align: center;
    }

    div#editor {
      width: 81%;
      margin: auto;
      text-align: left;
    }
  </style>
    
    
</head>

<body>
 
        <!-- Body content -->

        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="pe-7s-call"></i> +2347039149150</span>
                                <span><i class="pe-7s-mail"></i> jobs@myhotjbz.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <!--<li><a href="#"><i class="fa fa-vine"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>          
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                       
                        <!--<button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('submit-property.html')">Submit</button>-->
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="wow fadeInDown" ><a class="" href="index.php">Home</a></li>
                         <!--<li class="wow fadeInDown" ><a class="" href="info.php">ReWrite Your CV</a></li>
                         <li class="wow" ><a class="" href="int.php">Interview Tip</a></li>-->
                        <li class="dropdown ymm-sw " >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" >Categories <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                    <?php 
                    $set = mysqli_query($conn, "SELECT * FROM cate");
                    while($rw = mysqli_fetch_assoc($set)){
                    ?>
                    <li>
                                    <a href="cate.php?job_cate=<?php echo $rw['job_cate']; ?>"><?php echo $rw['job_cate']; ?></a>
                                </li>
                    <?php
                        }
                    ?> 
                            </ul>
                        </li>
                        
                        <li class="dropdown ymm-sw " >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" >Location <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <?php 
                    
                    $set = mysqli_query($conn, "SELECT * FROM location");
                    while($rw = mysqli_fetch_assoc($set)){
                    ?>
                                 <li>
                                    <a href="loc.php?job_loc=<?php echo $rw['job_loc']; ?>"><?php echo $rw['job_loc']; ?></a>
                                </li>
                    
                    <?php
                        }
                    ?>
                            </ul>
                        </li>

                        
                  <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Student Corner <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li>
                                    <a href="uni.php">Course Materials</a>
                                </li>
                                <li>
                                    <a href="student.php?type=Material">General Materials</a>
                                </li>
                                <li>
                                    <a href="student.php?type=UTME">UTME/JAMB Materials</a>
                                </li>
                                <li>
                                    <a href="student.php?type=POST">POST JAMB/UTME Materials</a>
                                </li>
                                <li>
                                    <a href="student.php?type=int">Interview Questions</a>
                                </li>
                                <li>
                                    <a href="student.php?type=GMAT">GMAT Questions</a>
                                </li>
                            </ul>
                        </li>
                        
                        <?php if(isset($_SESSION['email'])){ 
                        
                        $_SESSION['email'] = $email;
                        $email = $_SESSION['email'];
                        $get_user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
                         $fetch = mysqli_fetch_assoc($get_user);

                        $name = $fetch['name'];
                        $email = $fetch['email'];
                        $phone = $fetch['phone'];

                        //echo "LOG IN!";

                        ?>
                        
                          
                               <!-- When a user is logged in...  -->
                  <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="index.php" class="dropdown-toggle active" data-toggle="dropdown" data-hover="dropdown" data-delay="200"><?php echo $name; ?></php><b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                
                                <li>
                                    <a href="jobs.php">Post Job</a>
                                </li>
                               <li>
                                    <a href="viewjobs.php">Jobs Posted</a>
                                </li>
                                
                                <li>
                                    <a href="logouts.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                            
                        <?php }else{ ?>
                        
                     
                        
                        
                        <button class="navbar-btn nav-button login" onclick=" window.open('register.html')">Login</button>
                        <?php } ?>

                        <!--<li class="wow fadeInDown"><a href="contact.html">Contact</a></li>-->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->
     <br>
    <div class="container">
        <div class="col-md-12"> 
        <h3>Make  Job Post</h3>
        </div>
        <div class="col-md-6">
             <form method="post" action="" id = "register-form">
             <div class="form-group">
                <input type="text" class="form-control" placeholder="Title of Job Post" name="job_title"  id="job_title" required> 
             </div>
                 
                <div class="form-group">
                <input type="email" class="form-control" placeholder="Company/Organization Contact Email" name="job_contact"  id="job_contact" required> 
             </div>
                 
            <div class="form-group">
                <select class="form-control" name="job_cate" id="job_cate" required>
                <option>Select Post Category</option>
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
                 
            <div class="form-group">
                <select class="form-control" name="job_loc" id="job_loc" required>
                <option>Select Post Location</option>
                    <?php 
                    
                    $set = mysqli_query($conn, "SELECT * FROM location");
                    while($rw = mysqli_fetch_assoc($set)){
                    ?>
                    <option value="<?php echo $rw['job_loc']; ?>"> <?php echo $rw['job_loc']; ?> </option>
                    <?php
                        }
                    ?>
                </select>
            </div>
                 
                 <input type="hidden" name="name"  id="name" class="form-control" value="<?php echo $name; ?>">
                 <input type="hidden" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
                 
    </div>
        
</div>
  
    
  <div id="editor">
      <textarea id='edit' class="job_des" name="job_des" style="margin-top: 30px;" 
        placeholder="Give A Details Description of the Job Post..." required>
      </textarea>
<br>
      <input class="btn btn-success btn-md" id="post" type="submit">
    </form>
  </div>

    <br><br><br>
<?php include 'footer.php'; ?>
    
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="js/froala_editor.min.js"></script>
  <script type="text/javascript" src="js/plugins/align.min.js"></script>
  <script type="text/javascript" src="js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="js/plugins/image.min.js"></script>
  <script type="text/javascript" src="js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="js/plugins/link.min.js"></script>
  <script type="text/javascript" src="js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="js/plugins/table.min.js"></script>
  <script type="text/javascript" src="js/plugins/video.min.js"></script>
  <script type="text/javascript" src="js/plugins/url.min.js"></script>
  <script type="text/javascript" src="js/plugins/entities.min.js"></script>
  <script src="assets/js/jquery-1.10.2.min.js"></script> 
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <script>
      $(function(){
        $('#edit')
          .on('froalaEditor.initialized', function (e, editor) {
            $('#edit').parents('form').on('submit', function () {
              console.log($('#edit').val());
              return false;
            })
          })
          .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})
      });
  </script>
    
    <script>
    $('document').ready(function(){
       $('#post').click(function(){
            var job_title = $('#job_title').val();
            var job_contact = $('#job_contact').val();
            var job_loc = $('#job_loc').val();
            var job_cate = $('#job_cate').val();
            var job_des = $('.job_des').val();
            var name = $('#name').val();
            var email = $('#email').val();
           
           $.ajax({
               method: "POST",
               url: "input_post.php",
               data: {job_title: job_title, job_contact: job_contact, job_loc: job_loc, job_cate: job_cate, job_des: job_des, name: name, email: email},
               success: function(data){
                   alert('Job Posted Successfully');
               }
           })
       });
    });
    </script>
    
</body>
</html>
