<?php



include_once("config.php");
$set=$_POST['search'];
if($set){

 $sql= "SELECT * FROM addnewuser WHERE account_no LIKE '$set'";
    
   $result= mysqli_query($myConnection,$sql);

while ($rows = mysqli_fetch_array($result))
      {
   
     $nameadd= $row['name_address'];
     $contract= $row['contract_number'];
     $date= $row['submit_date'];
     $email= $row['email'];
     $electricitybillname= $row['electicitybill_name'];
   
      echo '.$nameadd.';

   
      } 
    }


    else{echo"Nothing found";}
?>








