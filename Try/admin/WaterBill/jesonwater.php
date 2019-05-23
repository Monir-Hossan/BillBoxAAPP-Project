<?php
include 'config.php';

// Create connection
$myConnection = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name");

if ($myConnection->connect_error) {
 die("Connection failed: " . $myConnection->connect_error);
} 

$sql = "SELECT * FROM water";
$result = $myConnection->query($sql);

if ($result->num_rows >0) {
 // output data of each row
 while($row[] = $result->fetch_assoc()) {
 
 $tem = $row;
 
 $json = json_encode($tem);
 
 
 }
 
} else {
 echo "0 results";
}
 echo $json;
$myConnection->close();
?>