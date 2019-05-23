<?php
include_once("config.php");

//customer information table 
$water = "CREATE TABLE IF NOT EXISTS water(	id TINYINT NOT NULL auto_increment,
							PRIMARY KEY (id),
							name_address VARCHAR(50) NOT NULL,
							billing_month VARCHAR(50) NOT NULL,
							bill_no  int(50) NOT NULL,
							consumption VARCHAR(50) NOT NULL,
							account_no int(50) NOT NULL,
						     energy_charge int(50) NOT NULL ,
							others int(50) NOT NULL,
								total_bill int(50) NOT NULL,
								due_bill int(50) NOT NULL,
								biil_payafterduedate int(50) NOT NULL,
								tansaction_id int(50) NOT NULL)";
$query = mysqli_query($myConnection, $water);
if ($query === TRUE) {
	echo "<h3>water_bill table created OK :) </h3>"; 
} else {
	echo "<h3>water_bill table NOT created :( </h3>"; 
}
?>