<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bell_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$page_url =  $_SERVER['PHP_SELF'];
$data =  explode("/", $page_url);
$date = $data[3];
$bell_time = $data[4];
$duration = $data[5];

$sql = "DELETE FROM time_intervals WHERE exam_date = '$date' and bell_time = '$bell_time' and duration = $duration";
// print_r($sql);
// die();
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

header("Location: http://localhost/Bell_System/view_time_interval.php");
?>