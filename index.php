<!-- Input from first page i.e. Date and Time intervals  -->
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
echo "Connected successfully";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $exam_date = $_POST['date'];
  $time_intervals = $_POST['field'];
 $bell_duration = $_POST['duration'];

// $data =  explode(":", $time_intervals[0]);
// $date = $data[0];
// $bell_time = $data[1];
// $duration = $data[2];
// $a = $bell_duration[0];
// $end_time = $duration + $bell_duration; 
  // echo "<pre>";
  // print_r($data);
  // echo "<br>";
  // print_r($end_time);
  // echo "<br>";
}
// $bell_duration = 10;
// echo "<pre>";
// print_r($time_intervals);
// die();
  
$length = sizeof($time_intervals);
// echo $length;
// die();

// $ip_address = getenv("REMOTE_ADDR") ;
//  print_r( $ip_address);
//  die();
for($i = 0; $i < $length; $i++){
  
  $interval = $time_intervals[$i];
  $duration = $bell_duration[$i];

  $sql = "INSERT INTO time_intervals (exam_date, bell_time, duration)
  VALUES ('$exam_date', '$interval', $duration)";

  if (mysqli_query($conn, $sql)) {
    echo "New record inserted successfully";
    echo "<br>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);

header("Location: view_time_interval.php");
exit();


?>
