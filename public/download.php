<?php
require_once 'config.php';
$get_item = mysqli_query($conn, "SELECT * FROM docs WHERE path = '$filename'");
$row = mysqli_fetch_assoc($get_item);

$name = $row['path'];

$name= $_GET['nama'];

    header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header("Content-Disposition: attachment; filename=\"" . basename($name) . "\";");
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($name));
    ob_clean();
    flush();
    readfile("your_file_path/".$name); //showing the path to the server where the file is to be download
    exit;

//$filename =$_GET['name'];

/*
  $download_path = "./doc/";
  if(eregi("\.\.", $filename)) die("I'm sorry, you may not download that file.");
  $file = str_replace("..", "", $filename);
  if(eregi("\.ht.+", $filename)) die("I'm sorry, you may not download that file.");
  $file = "$download_path$file";
  if(!file_exists($file)) die("I'm sorry, the file doesn't seem to exist.");
   $type = filetype($file);
   $today = date("F j, Y, g:i a");
   $time = time();
  header("Content-type: $type");
  header("Content-Disposition: attachment;filename=$filename");
  header("Content-Transfer-Encoding: binary");
  header('Pragma: no-cache');
  header('Expires: 0');
  set_time_limit(0);
  readfile($file);
  */
?>