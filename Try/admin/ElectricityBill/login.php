<?php

	$loginData = file_get_contents('php://input');

	$data = json_decode($loginData, true);

	$email = $data['email'];
	$password = md5($data['password']);
	$account_no = $data['account_no'];

	include_once("config.php");



	$sql = "SELECT * FROM table_user WHERE email = '$email' AND password = '$password' AND account_no = '$account_no'";
	
	$result = $myConnection->query($sql);
	$myData;

	if ($result->num_rows > 0) {
		if($row[] = $result->fetch_assoc()) {
			 $tem = $row[0];

			 $myData["user"] = $tem;
			 $myData["message"] = "Success";
	 	}
	} else {
		$myData["message"] = "Unsuccess";
	}



	$json = json_encode($myData);
	echo $json

?>