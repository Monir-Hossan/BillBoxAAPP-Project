
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
  height: 1000px;

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
  height: 1000px;
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
  <h1>Electricity Bill Page </h1>
 


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


<h1>Eelctricity Add New
User  From</h1>
<table border="0px" width="60%">
<form id="electricity" name="cusinfo" method="post" action="insertelectricitytable.php";>

  <tr >
    <td>Bill Box </td><td></td><td></td><td>Electricity Bill </td>
     </tr>


<tr>
    <td colspan="0">Name & address:</td><td> <input id="nameadd" input name="nameadd"  type="text"  maxlength="19"> </td> 
    <td>Bill Name:</td><td> <input id="nameadd" input name="nameadd"  type="text"  maxlength="19">  </td>
    
</tr>

<tr>
    <td colspan="0">PhoneNumber:</td><td> <input id="nameadd" input name="nameadd"  type="text"  maxlength="19"> </td>
    <td></td><td></td>
</tr>
<tr>
    <td colspan="0">Email:</td><td> <input id="nameadd" input name="nameadd"  type="text"  maxlength="19"> </td>
    <td></td><td></td>
</tr>
    

  <td>Meter No:</td><td><input id="billno" input name="billno"  type="text"  maxlength="19"></td>
</tr>


<tr>
<td>Date:</td><td> <input id="date" input name="date"  type="date"  maxlength="19"></td>

<tr>
<td>Account No:</td> <td>
<select input id="accountno" input name="accountno" type="text"  maxlength="19">

<?php while($row1 = mysqli_fetch_array($result) ):;?> 
<option><?php echo $row1[5];?></option>

<?php endwhile;?>
</select></td>
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

   </div>
    
  

  <footer>
 
  </footer>
  </div>
</center>
 </body>
</html>
