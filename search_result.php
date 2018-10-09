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
<html>
<head>

</head>

<body>


<?php
if(isset($_POST["submit1"])){
	if(isset($_POST["country"]) and $_POST["country"] != ""){
		$country_to_search = $_POST["country"];
		$query = "select * from hotel where Country = '{$country_to_search}'" ;
		$result = mysqli_query($conn,$query);
		
		
		if(mysqli_num_rows($result) >=1){
		echo "<table border=1>\n";
		echo "\t<tr>\n";
		echo "\t\t<th>HotelID</th>\n";
		echo "\t\t<th>Street</th>\n";
		echo "\t\t<th>Country</th>\n";
		echo "\t\t<th>State</th>\n";
		echo "\t\t<th>ZIP</th>\n";
		while ($row = mysqli_fetch_array($result)) 
		 {
			echo "\t<tr>\n";
			echo "\t\t<td><a href='room_res?id=".urlencode($row[0])."'>$row[0]</a></td>\n";
			echo "\t\t<td>$row[1]</td>\n";
			echo "\t\t<td>$row[2]</td>\n";
			echo "\t\t<td>$row[3]</td>\n";
			echo "\t\t<td>$row[4]</td>\n";
		
			echo "\t</tr>\n";
		 }
		 echo "</table>";
		}else{
			echo "<h3>No hotel in this country</h3><br />";
			echo "<a href='booking.php'>Return to Booking</a>";
		}
		
	}
}
if(isset($_POST["submit2"])){
	if(isset($_POST["state"]) and $_POST["state"] != ""){
		$state_to_search = $_POST["state"];
		$query = "select * from hotel where State='{$state_to_search}'" ;
		$result = mysqli_query($conn,$query);
		
		
		
		if(mysqli_num_rows($result) >= 1){
			echo "<table border=1>\n";
		echo "\t<tr>\n";
		echo "\t\t<th>HotelID</th>\n";
		echo "\t\t<th>Street</th>\n";
		echo "\t\t<th>Country</th>\n";
		echo "\t\t<th>State</th>\n";
		echo "\t\t<th>ZIP</th>\n";
		while ($row = mysqli_fetch_array($result)) 
		 {
			 echo "\t<tr>\n";
			echo "\t\t<td><a href='room_res?id=".urlencode($row[0])."'>$row[0]</a></td>\n";
			echo "\t\t<td>$row[1]</td>\n";
			echo "\t\t<td>$row[2]</td>\n";
			echo "\t\t<td>$row[3]</td>\n";
			echo "\t\t<td>$row[4]</td>\n";
			 
			 echo "\t</tr>\n";
		 }
		 echo "</table>";
		}else{
			echo "<h3>No hotel in this state</h3><br />";
			echo "<a href='booking.php'>Return to Booking</a>";
		
		 }
		
		
	}
}



?>
</table>
</body>
</html>