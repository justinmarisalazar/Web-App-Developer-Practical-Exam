<!DOCTYPE HTML>
<html>
<body>

<?php
	// Display the item that is not repetitive
    
    $colors = array("red", "blue", "black", "red", "blue", "blue", "red", "gold");
    $x = 0; // Counter variable
    
    // For loop that checks if a value is repetitive
    for($i = 0; $i < count($colors); $i++)
    {
        $x = 0; // Resets the counter variable
        for($j = 0; $j < count($colors); $j++)
        {
            if($colors[$i] == $colors[$j])
                $x++; // Increments the counter
        }
        
        // Prints the value if it's not repetitive
        if($x == 1)
            echo "$colors[$i]<br>";
    }
?>

</body>
</html>