<?php
$dbhost= "localhost";
$dbuser= "root";
$dbpass= "sanjana";
$dbname= "hulton_hotel";
$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(mysqli_connect_errno()){
	die("Database Connection failed: ". mysqli_connect_error()." (" . mysqli_connect_errno().")"	
	);
}
?>
<?php
if(!ISSET($_POST["submit"])){
	die("Invalid login");
}
if($_POST["name"]=="" || $_POST["address"]=="" || $_POST["phone_no"]=="" || $_POST["email"]=="" || $_POST["username"]=="" || $_POST["password"]==""){
	?>	
	<a href="form.php"> Re-enter Credentials </a><br/>
	<?php
	die("Fields cannot be left blank");
}
$query ="INSERT INTO CUSTOMER (";
$query .=" NAME, ADDRESS, PHONE_NO, EMAIL , USERNAME, PASSWORD";
$query .=" ) VALUES ( ";
$query .=" '{$_POST["name"]}', '{$_POST["address"]}','{$_POST["phone_no"]}','{$_POST["email"]}','{$_POST["username"]}','{$_POST["password"]}' ";
$query .=")";
$result = mysqli_query($conn,$query);
if($result){ ?>
	REGISTRATION SUCCESSFUL <br/>
	<a href="booking.php"> Continue to booking </a><br/>
<?php
	//redirect_to(booking.php);
}
else{
	?>	
	<a href="form.php"> Re-enter Credentials </a><br/>
	<?php
	die("Registration Failed, please enter values for all fields");
}
?>

<HTML>
<HEAD>
<TITLE>BOOKING</TITLE>
</HEAD>
<BODY>

</BODY>

</HTML>

<?php
mysqli_close($conn);
?>