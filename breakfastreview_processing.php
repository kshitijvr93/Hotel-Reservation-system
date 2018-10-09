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
	die("Invalid submission");
}
if($_POST["HotelID"]=="" || $_POST["BType"]=="" || $_POST["CID"]=="" || $_POST["review"]=="" || $_POST["rating"]==""){
	?>	
	<a href="breakfastreview.php"> Re-enter Credentials </a><br/>
	<?php
	die("Fields cannot be left blank");
}
$query ="INSERT INTO ROOM_REVIEW (";
$query .="HotelID, BType, CID, Text ,Rating";
$query .=" ) VALUES ( ";
$query .=" '{$_POST["HotelID"]}', '{$_POST["BType"]}','{$_POST["CID"]}','{$_POST["review"]}','{$_POST["rating"]}' ";
$query .=")";
$result = mysqli_query($conn,$query);
if($result){ ?>
	BREAKFAST REVIEW SUBMITTED <br/>
	<a href="servicereview.php"> Continue to Service review </a><br/>
<?php
}
else{
	?>	
	<a href="breakfastreview.php"> Please review. Thank you! </a><br/>
	<?php
	die("Review Failed, please enter values for all fields");
}
?>


<?php
mysqli_close($conn);
?>