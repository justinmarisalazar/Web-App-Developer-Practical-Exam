<!DOCTYPE HTML>
<html>
<body>
	<!-- User input form -->
	<form method="post" autocomplete="off">
		<h2>Enter a string:</h2>
		<input type="text" name="string">
		<input type="submit" value="Submit" name="submit">
	</form>
	
	<?php
		// Create a function that returns the reverse of an input string
		
		// Function that reverses an input string
		function reverse($str)
		{
			return strrev($str);
		}
		
		if(isset($_POST["submit"])) // Checks if submit button is clicked
		{
			echo reverse($_POST["string"]); // Calls the function to reverse the string and display it
		}
	?>
</body>
</html>