<?php
				  if (isset($_GET['id']))
	{
	
	echo '<form action="room_res_processing.php" method="post">';
	
	
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
			$query = "SELECT * FROM room where HotelID = {$id}";
			$result = mysqli_query($conn,$query);
			
			if(mysqli_num_rows($result) >=1){
		echo "<table border=1>\n";
		echo "\t<tr>\n";
		echo "\t\t<th>HotelID</th>\n";
		echo "\t\t<th>RType</th>\n";
		echo "\t\t<th>RoomNo</th>\n";
		echo "\t\t<th>Price</th>\n";
		echo "\t\t<th>Description</th>\n";
		echo "\t\t<th>Floor</th>\n";
		echo "\t\t<th>Capacity</th>\n";
			
			while($row = mysqli_fetch_array($result))
  			{
				echo "\t<tr>\n";
			echo "\t\t<td><a href='room_res_processing?id=".urlencode($row[0])."'>$row[0]</a></td>\n";
			echo "\t\t<td>$row[1]</td>\n";
			echo "\t\t<td><a href='room_res_processing?id=".urlencode($row[0])."&room_id=".urlencode($row[2])."'>$row[2]</a></td>\n";
			echo "\t\t<td>$row[3]</td>\n";
			echo "\t\t<td>$row[4]</td>\n";
			echo "\t\t<td>$row[5]</td>\n";
			echo "\t\t<td>$row[6]</td>\n";
			
			echo "\t</tr>\n";
			}
		 echo "</table>";
			}
		else{
			echo "<h3>No room available in this hotel</h3><br />";
			echo "<a href='booking.php'>Return to Booking</a>";
		}
		
			
			
	echo '</form>';
			}
			?>
			