<!DOCTYPE HTML>
<html>
<body>
	<!-- User input form -->
	<form method="post" autocomplete="off">
		<h2>Enter a word:</h2>
		<input type="text" name="word">
		<input type="submit" value="Submit" name="submit">
	</form>
	
	<?php
		// Create a function that checks if an input string is a palindrome. A palindrome is a word,
		// phrase, or sequence that reads the same backward as forward, e.g., madam or nurses run.
	
		// Function that checks if the input is a palindrome
		function isPalindrome($word)
		{
			if(strtolower($word) == strrev(strtolower($word)))
				return true;
			else
				return false;
		}
		
		// Checks if the submit button is clicked
		if(isset($_POST["submit"]))
		{
			$word = $_POST["word"]; // Imports value from the form
			
			$origWord = $word; // Stores the original input in a variable
			$word = str_replace(' ', '', $word); // Removes the spaces from the input
			$word = str_replace('\'', '', $word); // Removes the apostrophes from the input
			
			// Prints if the input is a palindrome or not
			if(isPalindrome($word))
				echo "<h3>$origWord is a palindrome.</h3>";
			else
				echo "<h3>$origWord is not a palindrome.</h3>";
		}
	?>
</body>
</html>
