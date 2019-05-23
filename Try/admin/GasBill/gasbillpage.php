


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

.topnav {
  overflow: hidden;
  background-color:gray;
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
  background-color:orange;
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
  background-color: white;
  left: 25px;
 
width:95%;
 
 
  top: 150px; 
  position: absolute;


  

}
#th, td {
    padding: 5px;
    text-align: left;    
}


</style>


</head>
<body style="background-color:powderblue;">

<center>
<div id="header">
  <h1> Gas Bill Page </h1>
 


</div>

  <div id="menu">
    <div class="topnav">

 
  


    <div class="dropdown">
    <button class="dropbtn">GasBill 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="gasbillpage.php">GasBillPage</a>
      <a href="gasbill_insert.php">GasBill-Insert</a>
      <a href="jeosngas.php">JesonCodeView</a>
    </div>
  </div> 

  
	
</div>
  </div>


  
<div id="cont">

<?php

include("config.php");

$sql = "SELECT * FROM gas ";
$result=mysqli_query($myConnection,$sql);

while($row=mysqli_fetch_array($result) ) {
$id= $row['id'];
$nameadd= $row['name_address'];
$billmonth= $row['billing_month'];
$billno= $row['bill_no'];
$consumption= $row['consumption'];
$accountno= $row['account_no'];
$energycharge= $row['energy_charge'];
$other= $row['others'];
$totalbill= $row['total_bill'];
$duebill= $row['due_bill'];
$dateafterpay= $row['biil_payafterduedate'];
$transaction= $row['tansaction_id'];
$date= $row['submitt_date'];

echo'<table  width="40%"  border="3px">


<table border="0px" width="40%">
<form id="electricity" name="cusinfo" method="post" action="inserteGasbilltable.php";>

  <tr >
    <td>Bill Box </td><td></td><td></td><td>Gas Bill </td>
     </tr>
    

<tr>
    <td colspan="0">Name & address:</td><td> '.$nameadd.' </td><td></td><td></td>
</tr>
    
<tr>
<td>Billing Month: </td><td>'.$billmonth.'</td> <td>Bill No:</td><td>'.$billno.'</td>
</tr>


<tr>
<td>KWH Consumerd:</td><td>'.$consumption.' </td><td>Account No:</td> <td>'.$accountno.'
</td>
    </tr>

 <tr>
      <td>Energy charge: </td><td>'.$energycharge.'</td><td>Date</td><td>'.$date.'</td>
</tr>

<tr>
    <td>MeterCharge:</td><td>'.$other.'</td>
     <td></td><td></td>
     </tr>

<tr>
<td>Total:</td><td>'.$totalbill.'</td>
<td></td><td></td>
</tr>


<tr>

 <td>Vat:</td><td>'.$duebill.' </td>
 <td></td><td></td>

</tr>


<tr>

 <td>G.Total :</td><td>'.$dateafterpay.' </td>
 <td></td><td></td>
</tr>


    

   <tr>
    <td>Transaction Id:</td><td>'.$transaction.' </td>
 <td>
    </td><td></td>
</tr>
  



  </form>
</table>';


}




?>

</div>
</center>
 </body>
</html>



