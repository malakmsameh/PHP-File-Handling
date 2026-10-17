<?php

// "w" = write (creates the file if it doesn't exist)
$file = fopen("welcome.txt", "w");

fwrite($file, "Welcome to PHP File Handling!");

fclose($file);

echo "File created and text written!";

?>