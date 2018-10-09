<?php
				  if (isset($_GET['id']))
	{
	$hotel_id = $_GET["id"];
	$room_id = $_GET["room_id"];
	
	echo '<form action="service_page.php" method="post">';
	
	
	echo '<br>';
	echo '<input type="hidden" name="firstname" value="'. $_GET['id'] .'">';
			$dbhost= "localhost";
			$dbuser= "root";
			$dbpass= "sanjana";
			$dbname= "hulton_hotel";
			$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

			if(mysqli_connect_errno()){
				die("Database Connection failed: ". mysqli_connect_error()." (" . mysqli_connect_errno().")"	
				);
			}

		
			$id=$_GET['id'];
			echo $id;
			$query = "SELECT * FROM Breakfast where HotelID = {$id}";
			$result = mysqli_query($conn,$query);
			
			if(mysqli_num_rows($result) >=1){
		echo "<table border=1>\n";
		echo "\t<tr>\n";
		echo "\t\t<th>HotelID</th>\n";
		echo "\t\t<th>Btype</th>\n";
		echo "\t\t<th>Bprice</th>\n";
		
		echo "\t\t<th>Description</th>\n";
		
			while($row = mysqli_fetch_array($result))
  			{
				echo "\t<tr>\n";
			echo "\t\t<td>$row[0]</td>\n";
			echo "\t\t<td><a href='service_page.php?hotel_id=".$hotel_id."&room_id=".$room_id."&btype=".urlencode($row[1])."'>$row[1]</a></td>\n";
			echo "\t\t<td>$row[2]</td>\n";
			echo "\t\t<td>$row[3]</td>\n";
			
			
			echo "\t</tr>\n";
			}
		 echo "</table>";
			}
		else{
			echo "<h3>No breakfast available</h3><br />";
			echo "<a href='booking.php'>Return to Booking</a>";
		}
		
			
			
	echo '</form>';
			}
			?>
			
	
			

			
