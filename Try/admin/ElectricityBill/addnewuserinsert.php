<?php
$id=$_POST['id'];

$nameadd=$_POST['nameadd'];
$contract=$_POST['contract'];
$email=$_POST['email'];
$transaction=$_POST['transaction'];
$date=$_POST['date'];
$accountno=$_POST['accountno'];
$electricitybillname=$_POST['electricitybillname'];






include_once("config.php");
$query = mysqli_query($myConnection, "INSERT INTO addnewuser(id,name_address,	contract_number	,email,tansaction_id, submit_date,account_no,electicitybill_name)

 VALUES('$id','$nameadd','$contract','$email','$transaction','$date','$accountno','$electricitybillname')") or die (mysqli_error($myConnection));
header("location:addnewuserfrom.php");

exit();
?>