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
width:95%;
  height: 200px;
 
  top: 0px; 
  position: absolute;
  left: 0px;
  border: 0px ;}

#menu{
    width:95%;
  height: 50px;
  background-color: gray;
  top: 50px;
  position: absolute;
  left: 30px;
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
#cont{
  height: 251px;

width:100%;
 
 
  top: 250px; 
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

 


</div>

  <div id="menu">
    <div class="topnav">
  <a href="home.html">Home</a>
 
  
  <a href="login.html">login</a>
  
  <a href="singup.html">Signup</a>

   
 <a href="gasbillpage.php">gasbill</a>
    
  <a href="insertGasbilltable.php">Bill Insert from</a>
	
</div>
  </div>


  
<div id="cont">


 </body>
</html>
