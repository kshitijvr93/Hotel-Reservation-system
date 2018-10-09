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
if(!ISSET($_POST["login"])){
	die("Invalid login");
}
if($_POST["username"]=="" || $_POST["password"]==""){
	die("Fields cannot be left blank");
}
$query ="SELECT PASSWORD ";
$query .="FROM CUSTOMER ";
$query .="WHERE USERNAME='{$_POST["username"]}' ";
$result = mysqli_query($conn,$query);
if(!$result){ ?>	
	<a href="login.php"> Re-enter Credentials </a><br/>
<?php	
	die("Login Failed");
}
?>
<?php
$pwd=$_POST["password"];
while($password= mysqli_fetch_row($result)){
$password=implode(" ",$password);
if($pwd===$password){ ?>
<br/><a href="booking.php">Contine to booking</a><br/>
<?php	
}
else{ ?>
<br/>	<a href="login.php"> Re-enter Credentials </a><br/>
<?php	
}	
}
if(mysqli_num_rows($result)===0){ ?>
	<br/>	<a href="login.php"> Re-enter Credentials </a><br/>
<?php
}
?>

<HTML>
<HEAD>
<TITLE>Login_Process</TITLE>
</HEAD>
<BODY>

</BODY>

</HTML>
<?php
mysqli_free_result($result);
?>
<?php
mysqli_close($conn);
?>