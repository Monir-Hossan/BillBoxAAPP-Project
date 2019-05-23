<?php
include_once("config.php");

//customer information table 
$addnewuser = "CREATE TABLE IF NOT EXISTS addnewuser(	id TINYINT NOT NULL auto_increment,
							 PRIMARY KEY(id),
							 name_address VARCHAR(50) NOT NULL,
							 account_no int(50) NOT NULL PRIMARY KEY,
						     submit_date date(format) NOT NULL,
						     contract_number int(12) NOT NULL,
						     email  VARCHAR(50) NOT NULL,
							 tansaction_id int(50) NOT NULL)";
$query = mysqli_query($myConnection, $addnewuser);
if ($query === TRUE) {
	echo "<h3>addnewuser table created OK :) </h3>"; 
} else {
	echo "<h3>addnewuser table NOT created :( </h3>"; 
}
?>