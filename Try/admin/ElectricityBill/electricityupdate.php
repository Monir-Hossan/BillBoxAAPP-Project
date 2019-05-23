<?php 
include("config.php");

$sql = "SELECT * FROM elctricity ";
$result= mysqli_query($myConnection,$sql);




$sql = "UPDATE elctricity SET accountno='Doe' WHERE id=2";

if ($myConnection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $myConnection->error;
}

$myConnection->close();
?>

