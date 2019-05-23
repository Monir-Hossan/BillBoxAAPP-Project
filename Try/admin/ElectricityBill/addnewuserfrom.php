
<?php 
include("config.php");

$sql = "SELECT * FROM table_user ";
$result= mysqli_query($myConnection,$sql);

 

?>




<!DOCTYPE HTML>
<html>
<head>

<title></title>
<script>
function del() {
    
       var del= confirm("For sure Would you like to delete it?");
    if(del==true)
        { return true;}
    else 
        { return false;}
           }
</script>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electricity Bill Calculator</title>

    <!-- Bootstrap CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<style>
#header{
width:100%;
  height: 70px;
 
  top: 0px; 
  position: absolute;
  left: 0px;
  border: 0px ;}

#menu{
    width:100%;
  height: 50px;
  background-color: gray;
  top: 70px;
  position: absolute;
  left: 0px;
  border: 0px solid;}

topnav {
  overflow: hidden;
  background-color:red;
}

.topnav a {

  float:left;
  display: block;
  color:white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: orange;
  color: black;
}
.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;}
#cont{
  height: 10000px;

width:50%;
 background-color: #F8F9F9;
  top: 150px; 
  position: absolute;
  left: 25px;
  border: 0px solid;



  

}
#th, td {
    padding: 5px;
    text-align: left;    
}
.container{
width:50%;
  height: 10000px;
  background-color: white;
 top: 150px; 
  position: absolute;

  right: 25px;
  border: 0px solid;
}
</style>


</head>
<body style="background-color:powderblue;">

<center>
<div id="header">
  <h1> Bill Page </h1>
 


</div>

  <div id="menu">
    <div class="topnav">
       <a href="electicity_bill.php">ElectricityBill</a>
  

   <div class="dropdown">
    <button class="dropbtn">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="electicity_bill.php">ElectricityBillPage</a>
      <a href="electricity_insert.php">ElectricityBillInsert page</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
</div>
  </div>

  
<div id="cont">


<h1> Add New User Form</h1>
<table border="0px" width="60%">
<form id="addnewuser" name="cusinfo" method="post" action="addnewuserinsert.php";>

  

<tr>
<td colspan="0">Id Number:</td><td> <input id="id" input name="id"  type="text"  maxlength="30"> 
</td>
<td>Bill Name:</td><td> <input id="electricitybillname" input name="electricitybillname"  type="text"  maxlength="30">  
</td>
</tr>

<tr>
<td colspan="0">Name & address:</td><td> <input id="nameadd" input name="nameadd"  type="text"  maxlength="30"> </td> 
</tr>

<tr>
<td colspan="0">PhoneNumber:</td><td> <input id="contract" input name="contract"  type="text" maxlength="30"> </td>
</tr>

<tr>
<td>Transaction:</td><td> <input id="transaction" input name="transaction"  type="text"  maxlength="30"></td>
</tr>

<tr>
<td colspan="0">Email:</td><td> <input id="email" input name="email"  type="text"  maxlength="30"> </td>
</tr>
    
<tr>
<td>Date:</td><td> <input id="date" input name="date"  type="date"  maxlength="30"></td>
</tr>

<tr>
<td>Account No:</td> <td><input id="accountno" input name="accountno" type="text"  maxlength="30"></td>
</tr>
<tr>
<td> <div class="col-lg-6">
<button type="submit" class="btn btn-primary">Submit</button>
</div></td><td></td>
</tr>
</form>
</table>
</div>





<div class="container">
  <h1> Add New User Form</h1>
 <?php
include("config.php");
$sql = "SELECT * FROM addnewuser ";
$result=mysqli_query($myConnection,$sql);
while($row=mysqli_fetch_array($result) ) {

$id= $row['id'];
$nameadd= $row['name_address'];
$accountno= $row['account_no'];
$date= $row['submit_date'];
$email= $row['email'];
$contract= $row['contract_number'];
$electricitybillname= $row['electicitybill_name'];
$transaction= $row['tansaction_id'];






echo'<table  width="60%" border="5px">
<table border="solid 0px 0px 1px 0px" width="60%">
<form id="electricity" name="cusinfo" method="post" action="addnewuserinsert.php";>

 
<tr>
<td colspan="0">Bill No:</td><td> '.$id.'</td>
</tr>
<tr>
<td colspan="0">Name & address:</td><td> '.$nameadd.'</td>
</tr>
<tr>
<td colspan="0">PhoneNumber: </td><td>'.$contract.'</td> 
</tr>
<tr>
<td colspan="0">Transaction:</td><td>'.$transaction.'</td>
</tr>
<tr>
<td colspan="0">Email:</td><td>'.$email.' </td>
</tr>
<tr>
<td colspan="0"> MeterAccount:</td> <td>'.$accountno.'</td>
</tr>
<tr>
<td colspan="0">BillName: </td><td>'.$electricitybillname.'</td>
</tr>
<tr>
<td colspan="0">Date</td><td>'.$date.'</td>
</tr>
</form>
</table>';}?>
</div>
</div>
<footer>
</footer>
</div>
</center>
 </body>
</html>
