<!DOCTYPE html>
<html lang="en">
	<head>
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
  height: 251px;

width:100%;
 
 
  top: 250px; 
  position: absolute;


  

}
#th, td {
    padding: 5px;
    text-align: left;    
}
.container{
width:60%;
  height: 800px;
  background-color: white;
  top: 120px;
  position: absolute;

  left: 50px;
  border: 4px solid;




}


</style>






	</head>
	<body body style="background-color:powderblue;">
<h1>BillBox</h1>

		<div id="menu">
    <div class="topnav">
 <a href="admin/ElectricityBill/adminhome.php">Home</a>
 
  
  <a href="electicity_bill.php">ElectricityBill</a>
  
  <a href="../GasBill/gasbillpage.php">GasBill Information</a>
   <a href="../WaterBill/waterbillpage.php">WaterBill Information</a>
     <div class="dropdown">
    <button class="dropbtn">ElectricityBill
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="electicity_bill.php">ElectricityBillPage</a>
      <a href="electricity_insert.php">ElectricityBill-Insert</a>
      <a href="bill.php">BillCalculator</a>
    </div>
  </div> 


	<div class="container">

		
		<h1>Electricity Bill Calculator</h1>
		<form action="" method="POST" role="form">
		<div class="row">
			<div class="col-lg-4">
				<div class="form-group">
					<label for="">Total Unit / Kwh</label>
					<input type="text" class="form-control" name="unit" placeholder="Input total Unit">
				</div>
			</div>

			<div class="col-lg-4">
				<div class="form-group">
					<label for="">Meter Charge</label>
					<select class="form-control" name="meter">
						<option value="55">55 BDT</option>
						<option value="70">70 BDT</option>
					</select>
				</div>
			</div>
			
			<div class="col-lg-6">
				<button type="submit" class="btn btn-primary">Calculate</button>
			</div>
		</div>
		</form>

		<hr>
		<?php
		if(isset($_POST['unit']))
		{
			$total = 0;
			$unit = (int) $_POST['unit'];

			function calculate($unit,$range,$price)
			{
				$xunit = $range[1]-$range[0]+1;
				if($unit<=$xunit && $unit>0)
				{
					$bill = $unit  * $price;
					echo "
						<tr>
							<td>".implode("-", $range)."</td>
							<td>$price</td>
							<td>$unit</td>
							<td>$bill BDT</td>
						</tr>
						";
					return array($unit-$xunit, $bill);
				}
				elseif($unit>$xunit)
				{
					$bill = $xunit * $price;
					$newUnit = $unit - $xunit;
					echo "
						<tr>
							<td>".implode("-", $range)."</td>
							<td>$price</td>
							<td>".$xunit."</td>
							<td>$bill BDT</td>
						</tr>
						";
					return array($newUnit, $bill);
				}
			}

			echo "<h3>Bill for $unit Unit</h3>";

			echo "<table class=\"table table-hover\">
			<thead>
				<tr>
					<th>Range</th>
					<th>Price/Unit</th>
					<th>Unit</th>
					<th>Bill</th>
				</tr>
			</thead>
			<tbody>
				
			";

			$newUnit = 0;
			if($unit>0)
			{
				$rep = calculate($unit,array(1,100),3.53);
				$newUnit = $rep[0];
				$total += $rep[1];
			}
			if($newUnit>0)
			{
				$rep = calculate($newUnit,array(101,200),5.01);
				$newUnit = $rep[0];
				$total += $rep[1];
			}
			if($newUnit>0)
			{
				$rep = calculate($newUnit,array(201,300),5.19);
				$newUnit = $rep[0];
				$total += $rep[1];
			}
			if($newUnit>0)
			{
				$rep = calculate($newUnit,array(301,400),5.42);
				$newUnit = $rep[0];
				$total += $rep[1];
			}
			if($newUnit>0)
			{
				$rep = calculate($newUnit,array(401,600),8.51);
				$newUnit = $rep[0];
				$total += $rep[1];
			}
			if($newUnit>0)
			{
				$rep = calculate($newUnit,array(601,1000000),9.93);
				$newUnit = $rep[0];
				$total += $rep[1];
			}
			$meter = $_POST['meter'];
			$newTotal = $total + $meter;
			$vat = ($newTotal * 15)/100;
			$gTotal = $newTotal + $vat;
			echo "
				
			</tbody>

			<tfoot>
				<tr>
					<th></th>
					<th></th>
					<th>Bill</th>
					<th>$total BDT</th>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<th>Meter Charge</th>
					<th>$meter BDT</th>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<th>Total</th>
					<th>$newTotal BDT</th>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<th>Vat</th>
					<th>$vat BDT</th>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<th>G. Total</th>
					<th>$gTotal BDT</th>
				</tr>

			</tfoot>
		</table>";
		}
		?>
	

	<footer>
	<P>@monirhossan<br>
	@panto</P>
		
	</footer>
	</div>	
	</body>
</html>
