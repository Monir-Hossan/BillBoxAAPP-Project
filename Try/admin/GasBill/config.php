<?php


$db_host = "localhost"; 

$db_username = "root";  

$db_pass = "";  

$db_name = "bill_box"; 
$config_sitename="Now is the time to Get your's one";

$designer="copyright  |  Monir"  ;
$myConnection = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name");

if (mysqli_connect_error()) {
    echo mysqli_connect_erro();
    exit();
} else {
	//echo "Successful database connection, happy coding!!!";
}           
?>