<html lang="en">
	<head>
		<title>CreditCard Information</title>
	</head>
	<body>
	CUSTOMER REVIEW<BR /><BR />
	<BR />ROOM REVIEW<BR />
	<form action="roomreview_processing.php" method="post">
	<p><label for="rating">Rating</label>
	<input type="radio" name="rating" value="5" /> 5 
	<input type="radio" name="rating" value="4" /> 4
    <input type="radio" name="rating" value="3" /> 3 
	<input type="radio" name="rating" value="2" /> 2 
	<input type="radio" name="rating" value="1" /> 1</p>
	<p><label for="review">Review</label>
	<textarea name="review" rows="10" cols="40"></textarea></p>
	<p><label for="CID">Customer ID</label>
	<input type="text" name="CID" value="" />
	<p><label for="HotelID">Hotel ID</label>
	<input type="text" name="HotelID" value="" />
	<p><label for="RoomNo">Room Number</label>
	<input type="text" name="RoomNo" value="" />
    <p><input type="submit" name="submit" value="SUBMIT"</p>	
	</form>
	</body
</html>