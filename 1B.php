<!DOCTYPE HTML>
<html>
<body>

<?php
	// Create a PHP function using DO WHILE loop that will display all odd numbers from 0-10
	
	// Declaration of variables
	$i = 0; // Counter variable
	
	// Do-While loop that displays all odd numbers from 0-10
	do
	{
		// Checks if the counter is not divisible by 2
		if($i % 2 != 0)
			echo "$i<br>"; // Prints the value of the counter
		$i++; // Increments the counter
	} while ($i <= 10);
?>

</body>
</html>
