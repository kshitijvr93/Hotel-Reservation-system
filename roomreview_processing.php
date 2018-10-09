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
if($_POST["rating"]=="" || $_POST["review"]=="" || $_POST["CID"]=="" || $_POST["HotelID"]=="" || $_POST["RoomNo"]==""){
	?>	
	<a href="roomreview.php"> Re-enter Credentials </a><br/>
	<?php
	die("Fields cannot be left blank");
}
$query ="INSERT INTO ROOM_REVIEW (";
$query .=" Rating, Text, CID, HotelID , RoomNo";
$query .=" ) VALUES ( ";
$query .=" '{$_POST["rating"]}', '{$_POST["review"]}','{$_POST["CID"]}','{$_POST["HotelID"]}','{$_POST["RoomNo"]}' ";
$query .=")";
$result = mysqli_query($conn,$query);
if($result){ ?>
	ROOM REVIEW SUBMITTED <br/>
	<a href="breakfastreview.php"> Continue to Breakfast review </a><br/>
<?php
}
else{
	?>	
	<a href="roomreview.php"> Please review. Thank you! </a><br/>
	<?php
	die("Review Failed, please enter values for all fields");
}
?>


<?php
mysqli_close($conn);
?>