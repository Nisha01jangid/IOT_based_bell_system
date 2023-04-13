<?php
$servername = "localhost";
$username = "id20509447_nishajangid2003";
$password = "123qwe<>?QWE";
$database = "id20509447_bell_system";
$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isSet($_GET['type']) )
{           
   $device = $_GET['type'];
   $sql = "SELECT * FROM `ring`";
               
      if ($result = mysqli_query($conn, $sql)) 
      {			$myObj = new stdClass();;
               /* fetch associative array */
                  while ($row = mysqli_fetch_assoc($result)) 
                  {
                     $myObj->$device = $row[$device];
 
                    //  print_r($json_array);                                               
                     //built in PHP function to encode the data in to JSON format  
                     header('Content-Type: application/json');
                     echo json_encode($myObj);   
                  }                 
                  /* free result set */
                  mysqli_free_result($result);
      }else
      {
                     echo json_encode(json_decode ("{}"));
      }
 
                          
                 
             
}
/* close connection */
mysqli_close($conn);

?>