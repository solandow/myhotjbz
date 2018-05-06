<?php
	require_once 'config.php';
	
                                    $title = $_POST['title'];
                                    $path = $_POST['path'];
                                    $details = $_POST['detail'];
                                    $image = $_POST['image'];
                                    $type = $_POST['type'];
                                
                          $Today = date('y:m:s',time());
                          $date = date('d F, Y', strtotime($Today));
                           
                            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                            $image_name = addslashes($_FILES['image']['name']);
                            $image_size = getimagesize($_FILES['image']['tmp_name']);
                            move_uploaded_file($_FILES["image"]["tmp_name"], "doc_course/". $_FILES["image"]["name"]);
                            $pic = $_FILES["image"]["name"];
            
                                   
                            $in = mysqli_query($conn, "INSERT INTO docs (title, detail, path, date, type)VALUES
                            ('$title', '$details', '$pic', '$date', '$type')") or die(mysqli_error());
                                        
                                        echo "<script>alert('Course Material Uploaded Successfully');</script>";
                                        echo "<script>window.location = 'course_list.php';</script>";
                              
                               
                                
?>