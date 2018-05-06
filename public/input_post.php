<?php  
include 'config.php';
        $job_title = $_POST['job_title'];
        $job_des = $_POST['job_des'];
        $job_cate = $_POST['job_cate'];
        $job_loc = $_POST['job_loc'];
        $job_contact = $_POST['job_contact'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $Today = date('y:m:d',time());
        $new = date('F d, Y', strtotime($Today));
         // $insert = mysqli_query($conn, "INSERT INTO jobs (date) VALUES ('$new')") or die (mysqli_error());
        $post = mysqli_query($conn, "INSERT INTO jobs (name, email, job_title, job_cate, job_des, job_loc, job_contact, date ) VALUES ('$name', '$email', '$job_title', '$job_cate', '$job_des', '$job_loc', '$job_contact', '$new')");
       // echo "<script>alert('ok')</script>";
       //echo "<script>window.location = 'add.php'</script>";


?>