<!DOCTYPE HTML>
<html>
<body>

<?php
	// Create a PHP function using WHILE loop that will sum all even numbers from 0-10

	// Declaration of variables
	$i = 0; // Counter variable
	$sum = 0; // Sum variable
	
	// While loop that computes the sum of all even numbers from 0-10
	while ($i <= 10)
	{
		// Checks if the counter is divisible by 2
		if($i % 2 == 0)
			$sum += $i; // Adds the value of the counter into the 'sum'
		$i++; // Increments the counter
	}
	
	echo "The sum of all even numbers from 0-10 is $sum."; // Prints the sum
?>

</body>
</html>
