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
if($_POST["HotelID"]=="" || $_POST["SType"]=="" || $_POST["CID"]=="" || $_POST["rating"]=="" || $_POST["review"]==""){
	?>	
	<a href="servicereview.php"> Re-enter Credentials </a><br/>
	<?php
	die("Fields cannot be left blank");
}
$query ="INSERT INTO ROOM_REVIEW (";
$query .=" HotelID, SType, CID, Rating , Text";
$query .=" ) VALUES ( ";
$query .=" '{$_POST["HotelID"]}', '{$_POST["SType"]}','{$_POST["CID"]}','{$_POST["rating"]}','{$_POST["review"]}' ";
$query .=")";
$result = mysqli_query($conn,$query);
if($result){ ?>
	SERVICE REVIEW SUBMITTED <br/>
	THANK YOU !!<br/>
<?php
}
else{
	?>	
	<a href="review.php"> Please review. Thank you! </a><br/>
	<?php
	die("Review Failed, please enter values for all fields");
}
?>


<?php
mysqli_close($conn);
?>