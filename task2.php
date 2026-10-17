<?php

$file = fopen("fruits.txt", "r");

echo "<ul>";
while (!feof($file))
	{
		// repeat until the end of the file
		// read one line (trim removes the line break)
		$fruit = trim(fgets($file));
		if ($fruit != "") 
			{
				// skip empty lines
				echo "<li>$fruit</li>";
			}
}
echo "</ul>";

fclose($file);
