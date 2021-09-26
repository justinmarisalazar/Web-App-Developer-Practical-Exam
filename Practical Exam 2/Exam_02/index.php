<!DOCTYPE HTML>
<html>
<body>
	<?php
		// Create a file named "hello there.php"
	
		$file = fopen("hello_there.php", "w"); // Creates a file and set it to write mode
		// Text to insert into the file
		$content = "<?php\n\n" .
					"\t//This is a comment\n\n" .
					"\techo \"This is a test page!\";\n" .
					"\techo \"Exam number two!\";\n\n" .
					"\t//This is the end of a comment\n\n" .
					"?>";
		fwrite($file, $content); // Write the content into the file
		fclose($file); // Closes the file
	?>
</body>
</html>