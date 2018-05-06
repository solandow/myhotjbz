<?php  
include 'config.php';

$id = $_GET['id'];

$updat_count = mysqli_query($conn, "UPDATE docs SET download = download + 1 WHERE id = '$id'");
$pat = mysqli_query($conn, "SELECT * FROM docs WHERE id  = $id");

$det = mysqli_fetch_assoc($pat);


$path = $det['path'];

header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header("Content-Disposition: attachment; filename=\"" . basename($path) . "\";");
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($name));
    ob_clean();
    flush();
    readfile("doc/".$path); //showing the path to the server where the file is to be download
    exit;

//echo "<script>window.location = 'doc/$path';</script>";

?>