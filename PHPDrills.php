<!DOCTYPE html>
<html>
		<head>
			<title> I'm BACK</title>
		</head>
		<body>
			<p>I'm BACK</p>
		</body>
	<p>
		<?php
		// Rounding a floating point number to an integer
		// and print it to the screen
		$redondo = round(5.35698);
		print $redondo;
		?>
	</p>
	<p>
		<?php
		// Rounding a floating point number to 3 decimal places
		// and print it to the screen
		$redondo3 = round(9.456395, 3);
		print $redondo3;
		?>
	</p>
	<p>
		<?php
		// Print out the position of a letter that is in
		// your own name
		//should return 2
		$posicion = strpos("armando", "m");
		echo $posicion;

		?>
	</p>
	<p>
		<?php
		// Check for a false value of a letter that is not
		// in your own name and print out an error message
		//should return false and print "try another string"
		if (strpos("armando", "j") === false) {
			print "Try another letter not 'j'.";
		}
		?>
	</p>
</html>


