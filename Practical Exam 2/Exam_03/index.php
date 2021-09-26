<!DOCTYPE HTML>
<html>
<body>
	<!-- User input form -->
	<form method="post" autocomplete="off">
		<h2>Enter a number:</h2>
		<input type="number" name="number" min="1">
		<input type="submit" value="Submit" name="submit">
	</form>
	
	<?php
		// Create a function that checks if numbers 1 to N are Fibonacci numbers.
		// A number is Fibonacci if and only if one or both of (5*n^2 + 4) or (5*n^2 - 4) is perfect square.
		
		// Function that checks if the number is a fibonacci number using the first equation
		function isFibonacci_1($n)
		{
			$x = (5 * ($n * $n)) + 4;
			if(floor(sqrt($x)) == ceil(sqrt($x))) // Checks if number is a perfect square
				return true;
			else
				return false;
		}
		
		// Function that checks if the number is a fibonacci number using the second equation
		function isFibonacci_2($n)
		{
			$x = (5 * ($n * $n)) - 4;
			if(floor(sqrt($x)) == ceil(sqrt($x))) // Checks if number is a perfect square
				return true;
			else
				return false;
		}
		
		// Function that displays which numbers from 1 to N is a fibonacci number and which is not
		function displayFibonacci($n)
		{
			for($i = 1; $i <= $n; $i++)
			{
				if(isFibonacci_1($i) || isFibonacci_2($i))
					echo "$i is a Fibonacci Number<br>";
				else
					echo "$i is not a Fibonacci Number<br>";
			}
		}
		
		// Checks if the submit button is clicked
		if(isset($_POST["submit"]))
		{
			$n = $_POST['number']; // Imports value from the form
			displayFibonacci($n); // Calls the function to display the results
		}
	?>
</body>
</html>