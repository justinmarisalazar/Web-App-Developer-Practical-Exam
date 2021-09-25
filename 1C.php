<!DOCTYPE HTML>
<html>
<body>

<?php
	// Create a PHP function using FOR loop that will display 10 numbers in fibonacci sequence
	
	// Declaration of variables
	$x = 0; // First number
	$y = 1; // Second number
	$z = 0; // Next number
    
	// For loop that displays the first 10 numbers of the fibonacci sequence
	for($i = 0; $i < 10; $i++)
	{
		if($i <= 1) // For printing the first two numbers of the fibonacci sequence
			$z = $i;
		else
		{
			$z = $x + $y; // Addition of the two numbers before the next number
			$x = $y;
			$y = $z;
		}
		
		echo $z . "<br>"; // Prints the number
	}
?>

</body>
</html>
