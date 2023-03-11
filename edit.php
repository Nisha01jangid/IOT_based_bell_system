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


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $bell = $_POST['time_interval'];
    $date = $_POST['date'];
    $bell_time = $_POST['bell_time'];
    $duration = $_POST['duration'];
    
// echo "<pre>";
// print_r($_POST);
// die();
}

$sql = "UPDATE time_intervals SET bell_time =  '$bell' WHERE exam_date = '$date' and bell_time = '$bell_time' and duration = $duration";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

header("Location: view_time_interval.php");

?>