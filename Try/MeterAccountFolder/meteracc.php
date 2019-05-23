<?PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['account_no'])&& !empty(isset($_POST['account_no']))){
	include_once("connection.php");
	
	
	$account_no = $_POST['account_no'];
	
    $sql = "SELECT  account_no FROM electricity WHERE account_no = '$account_no'";
	
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		echo "LoginSuccess";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

}
?>