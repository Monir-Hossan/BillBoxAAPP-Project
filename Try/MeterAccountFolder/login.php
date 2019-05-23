<?php

	$loginData = file_get_contents('php://input');

	$data = json_decode($loginData, true);

                                     
	$account_no = $data['account_no'];

	include_once("config.php");



	$sql = "SELECT * FROM electricity WHERE account_no = '$account_no'";
	
	$result = $myConnection->query($sql);
	$myData;

	if ($result->num_rows > 0) {
		if($row[] = $result->fetch_assoc()) {
			 $tem = $row[0];

			 $myData["bill"] = $tem;
			 $myData["message"] = "Success";
	 	}
	} else {
		$myData["message"] = "Unsuccess";
	}



	$json = json_encode($myData);
	echo $json

?>