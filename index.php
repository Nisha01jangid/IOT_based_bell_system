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
  // echo "<pre>";
  // print_r($data);
  // echo "<br>";
  //  print_r($end_time);
  // die();
}

$length = sizeof($time_intervals);

for($i = 0; $i < $length; $i++){
  
  $interval = $time_intervals[$i];
  $duration = $bell_duration[$i];

  // $data =  explode(":", $interval);
  // $hour = $data[0];
  // $minute = $data[1];
  // $second = $data[2];
  // $a = $bell_duration[0];
  // $end = $second + $a;
  // $end_time = $hour.":".$minute.":".$end;
   

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
