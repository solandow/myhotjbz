  <?php
//session_start();
//$conn = mysqli_connect("localhost", "root", "") or die("Could not connect to server");
//$db = mysqli_select_db('mlm', $conn) or die("Could not find database");

error_reporting(0);
session_start();
		
$servername = "localhost";
$username = "root";
$password = "";
$db = "job";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}//
?>