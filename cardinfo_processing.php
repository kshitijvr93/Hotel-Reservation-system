<?php
$dbhost= "localhost";
$dbuser= "root";
$dbpass= "shree";
$dbname= "hulton_hotel";
$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(mysqli_connect_errno()){
	die("Database Connection failed: ". mysqli_connect_error()." (" . mysqli_connect_errno().")"	
	);
}
?>
<?php
if(!ISSET($_POST["submit"])){
	die("Invalid Credentials");
}
if($_POST["card_number"]=="" || $_POST["card_type"]=="" || $_POST["billing_address"]=="" || $_POST["code"]=="" || $_POST["exp_date"]=="" || $_POST["name"]==""){
	?>	
	<a href="cardinfo.php"> Re-enter Credentials </a><br/>
	<?php
	die("Fields cannot be left blank");
}
$query ="INSERT INTO credit_card (";
$query .=" CNumber, Ctype, Baddress, Code , ExpDate, Name";
$query .=" ) VALUES ( ";
$query .=" '{$_POST["card_number"]}','{$_POST["card_type"]}','{$_POST["billing_address"]}','{$_POST["code"]}','{$_POST["exp_date"]}','{$_POST["name"]}' ";
$query .=")";
$result = mysqli_query($conn,$query);
if($result){ ?>
	PAYMENT SUCCESSFUL !! <br/>
	
<?php
}
else{
	?>	
	<a href="cardinfo.php"> Re-enter Credentials </a><br/>
	<?php
	die("Payment Failed, please enter values for all fields");
}
?>

<?php
mysqli_close($conn);
?>