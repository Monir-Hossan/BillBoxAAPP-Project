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
  height: 200px;

 
  top:0px; 
  position: absolute;
  left: 0px;
  border: 0px;
  background-clip:blue;
  font-color:blue;
}
input[type=text] {
    width: 30px;
    right: 0px;
    box-sizing: border-box;
    border: 3px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;

    background-image: url('images/searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
	right:0%;
    width:40%;
}

#menu{
    width:100%;
  height: 50px;
  background-color: gray;
  top:200px;
  position: absolute;
  left:0px;
  border: 0px solid;}

topnav {
  overflow: hidden;
  background-color:red;
}

.topnav a {
	width: 70px;

  float: left;
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
    display: block;
}

#cont{
   width:90%;
   height: 400px;
 
  
  
  top: 250px; 
  left: 60px;

  position: absolute;


}
#th, td {
    padding: 8px;
    text-align: left;    
}



#footer{
width:100%;
height:400px;
top:650px;
left: 0px;
 
position: absolute;



}
img {
   border-radius: 50%;
}


</style>

<body style="background:url(images/head1.jpg) no-repeat center center fixed;
    -webkit-background-size: cover !important;
    -moz-background-size: cover !important;
    -o-background-size: cover !important;
    background-size: cover !important;
  ">
</head>
<body style="background-color:#F0F0E1;">


<div id="header">
	<header style="background-color:#FFFFFF;">

		
	 <img  src="images/LOGO4.png">
	 <marquee left="30px" width="50%" hight="12px" top="10" ><p><h1>Secure Fast Easy to use...</h1></p></marquee>
	  

 
 
 
</div>

  <div id="menu">
  	
    <div class="topnav">
    	
  <a href="index.php">Home</a>
 
  
  <a href="login.php">login</a>
  
  <a href="register.php">Signup</a>

  	<a href="">About</a>
  
  <a href="">Services</a>
  
  </div> 
  </center>
<form>
  <input  type="text" name="search" placeholder="Search..">
</form>
	

   
 
	
</div>
  </div>


  
<div id="cont">



</div>


<div id="footer">
 

  </div>

 </body>
</html>



