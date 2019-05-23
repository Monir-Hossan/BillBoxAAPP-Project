<!DOCTYPE HTML>
<html>
<head>

<title></title>


<style>
* {
  box-sizing: border-box;
}
#header{
width:100%;
  height: 70px;
  background-color:#FFFFFF;
 
  top: 0px; 
  position: absolute;
  left: 0px;
  border: 0px ;
}

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
 

width:100%;
background-color: white;
background-image: url("pulpitrock.jpg");
  
  border: 0px solid;
 left: 20px;
 height: 600px;
  top: 120px; 
  


  

}
#th, td {
    padding: 5px;
    text-align: left;    
}




</style>


</head>
<body style="background-color:#f1f1f1;padding:15px;">

<center>
<div id="header">
  <h1> Welcome to Adminpanel </h1>
 


</div>

  <div id="menu">
    <div class="topnav">
  <a href="adminhome.php">Home</a>
 
  
  <a href="ElectricityBill/electicity_bill.php">ElectricityBillInformation</a>
  
  <a href="GasBill/gasbillpage.php">GasBill Information</a>
   <a href="WaterBill/waterbillpage.php">WaterBill Information</a>
    <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 

   
 
	
</div>
  </div>


  
<div id="cont">
  




</div>
</center>
 </body>
</html>



