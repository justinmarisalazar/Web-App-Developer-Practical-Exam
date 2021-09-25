<!DOCTYPE HTML>
<html>
<body>

<?php
	// Display the value that have the most number of occurrence; in case of tie arrange in alphabetical order

	// Declaration of variables
	$names = array("Marvin", "Marco", "Marvin", "Marco", "Marco", "Marvin", "Christian");
	$occur = 0; // Number of occurrences
	$highestOccur = 0; // Number of highest occurrences
	$same = false; // Boolean for avoiding repetition
	$most = array(); // Array for storing values with the highest occurrences
    
	// For loop that displays the value that have the most number of occurrences
	for($i = 0; $i < count($names); $i++)
	{
		// Resets 'occur' and 'same' variables
		$occur = 0;
		$same = false;
		
		// For loop that counts the number of occurrences of a value
		for($j = 0; $j < count($names); $j++)
		{
			if($names[$i] == $names[$j])
			{
				$occur++; // Increments 'occur'
			}
		}
		
		// Checks if current number of occurrences is higher than the current highest
		if($occur > $highestOccur)
		{
			$highestOccur = $occur;
			$most = array(); // Clears the 'most' array
			
			// Checks if the highest occurrences value is already in the 'most' array
			for($k = 0; $k < count($most); $k++)
			{
				if($names[$i] == $most[$k])
					$same = true;
			}
			
			// Adds the value to the array if it's not yet present
			if(!$same)
				array_push($most, $names[$i]);
		}
		else if($occur == $highestOccur)
		{
			for($k = 0; $k < count($most); $k++)
			{
				if($names[$i] == $most[$k])
					$same = true;
			}
			
			if(!$same)
				array_push($most, $names[$i]);
		}
	}
	
	sort($most); // Sorts the array in alphabetical order
	
	// Prints the value(s) with the most occurrences
	echo "The value(s) with the most occurrences is/are:<br>";
	for($i = 0; $i < count($most); $i++)
	{
		echo "$most[$i]<br>";
	}
?>

</body>
</html>
