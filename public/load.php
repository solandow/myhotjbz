<?php 
 include 'config.php';
$NewComment = $_POST['NewComment'];
                        
                        $get_post = mysqli_query($conn, "SELECT * FROM jobs ORDER BY id DESC LIMIT '$NewComment'"); 
                        
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
                           <!-- <div class="image animated">
                                <a href="single.html">
                                    <img src="assets/img/blog2.jpg" class="img-responsive" alt="Example blog post alt">
                                </a>
                            </div>-->
                            <p class="intro"><?php echo $row['job_des']; ?></p>
                            <p class="read-more">
                                <a href="single.html" class="btn btn-default btn-border">Continue reading</a>
                            </p>
                        </section>   
<?php } ?>