<?php
include 'config.php';




$account_no = $_GET['account_no'];
// Create connection
$myConnection = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name");

if ($myConnection->connect_error) {
 die("Connection failed: " . $myConnection->connect_error);
} 

$sql = "SELECT * FROM electricity WHERE account_no = ".$account_no."";
$result = $myConnection->query($sql);


if ($result->num_rows > 0) {
	 // output data of each row
	 if($row[] = $result->fetch_assoc()) {
	 
		 $tem = $row[0];
		 
		 $json = json_encode($tem);
		 
	 
	 }
  echo $json;
} else {
 echo "{}";
}

$myConnection->close();
?>