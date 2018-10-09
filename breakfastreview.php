<html lang="en">
	<head>
	<title>CreditCard Information</title>
	</head>
	<body>
	CUSTOMER REVIEW<BR /><BR />
	<BR />BREAKFAST REVIEW<BR />
	<form action="breakfastreview_processing.php" method="post">
	<p><label for="HotelID">Hotel ID</label>
	<input type="text" name="HotelID" value="" />
	<p><label for="BType">Breakfast Type</label>
	<input type="text" name="BType" value="" />
	<p><label for="CID">Customer ID</label>
	<input type="text" name="CID" value="" />
	<p><label for="review">Review</label>
	<textarea name="review" rows="10" cols="40"></textarea></p>
	<p><label for="rating">Rating</label>
	<input type="radio" name="rating" value="5" /> 5 
	<input type="radio" name="rating" value="4" /> 4
    <input type="radio" name="rating" value="3" /> 3 
	<input type="radio" name="rating" value="2" /> 2 
	<input type="radio" name="rating" value="1" /> 1</p>
    <p><input type="submit" name="submit" value="SUBMIT"</p>	
	</form>
	</body
</html>