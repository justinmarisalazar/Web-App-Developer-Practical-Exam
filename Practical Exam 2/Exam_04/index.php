<!DOCTYPE HTML>
<html>
<body>
	<!-- User input form -->
	<form method="post" autocomplete="off">
		<label for="date1">Date 1: </label>
		<input type="date" id="date1" name="date1"><br>
		<label for="date2">Date 2: </label>
		<input type="date" id="date2" name="date2"><br><br>
		<input type="submit" value="Submit" name="submit"><br>
	</form>
	
	<?php
		// Create a function that checks for the difference of two dates
		
		// Function that calculates the difference between two dates
		function difference($date1, $date2)
		{
			$diff = abs(strtotime($date2) - strtotime($date1)); // Converts date into time in seconds
			// Converts time into year
			$years = floor($diff / (60 * 60 * 24 * 365));
			// Converts remaining time into month
			$months = floor(($diff - $years * 60 * 60 * 24 * 365) / (60 * 60 * 24 * 30));
			// Converts remaining time into day
			$days = floor(($diff - $years * 60 * 60 * 24 * 365 - $months * 60 * 60 * 24 * 30) / (60 * 60 * 24));
			
			echo "$years year(s), $months month(s), $days day(s)"; // Prints the difference in years, months, and days
		}
		
		if(isset($_POST["submit"])) // Checks if submit button is clicked
		{
			difference($_POST["date1"], $_POST["date2"]); // Calls the function to calculate the difference
		}
	?>
</body>
</html>