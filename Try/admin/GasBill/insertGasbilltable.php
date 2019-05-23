<?php

$nameadd=$_POST['nameadd'];
$billmonth=$_POST['billmonth'];
$billno=$_POST['billno'];
$consumption=$_POST['consumption'];
$accountno=$_POST['accountno'];
$total=$_POST['total'];
$date=$_POST['date'];
$meter=$_POST['meter'];
$newTotal=$_POST['newTotal'];
$vat=$_POST['vat'];
$gTotal=$_POST['gTotal'];
$transaction=$_POST['transaction'];


include_once("config.php");
$query = mysqli_query($myConnection, "INSERT INTO   gas(name_address,billing_month,	bill_no,consumption,account_no, energy_charge,submitt_date,others,total_bill,due_bill,biil_payafterduedate,tansaction_id)

 VALUES('$nameadd','$billmonth','$billno','$consumption','$accountno','$total','$date','$meter','$newTotal','$vat','$gTotal','$transaction')") or die (mysqli_error($myConnection));
header("location:gasbill_insert.php");

exit();
?>