<?php
include 'config.php';




$id = $_GET['id'];
// Create connection
$myConnection = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name");

if ($myConnection->connect_error) {
 die("Connection failed: " . $myConnection->connect_error);
} 

$sql = "SELECT * FROM electricity WHERE electricity.id = ".$id."";
$result = $myConnection->query($sql);


if ($result->num_rows > 0) {
	 // output data of each row
	 if($row[] = $result->fetch_assoc()) {
	 
		 $tem = $row[0];
		 
		 $json = json_encode($tem);
		 
	 
	 }
  echo $json;
} else {
 echo "0 results";
}

$myConnection->close();
?>