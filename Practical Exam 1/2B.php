<!DOCTYPE HTML>
<html>
<body>

<?php
	// Sort the array in ascending order; if the value is an odd number, round it up to the nearest tens
    
    $numbers = array(9863, 7127, 2020, 80, 131, 55, 100);
    
    // For loop that rounds the odd numbers in the array to the nearest tens
    for($i = 0; $i < count($numbers); $i++)
    {
        if($numbers[$i] % 2 != 0) // Checks if the number is an odd number
        {
            if($numbers[$i] % 10 < 5) // Checks if the last digit is less than 5
            {
                $numbers[$i] = floor($numbers[$i] / 10) * 10; // Round down
            }
            else // Last digit is more than or equal to 5
            {
                $numbers[$i] = ceil($numbers[$i] / 10) * 10; // Round up
            }
        }
    }
    
    sort($numbers); // Sorts the array in ascending order
    
    // Prints the values in the array
    for($i = 0; $i < count($numbers); $i++)
    {
        echo "$numbers[$i]<br>";
    }
?>

</body>
</html>
