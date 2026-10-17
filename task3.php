<?php

if (file_exists("config.txt"))
{
	rename("config.txt", "config.bak");
	echo "config.txt was renamed to config.bak";
}
else
{
	// stops the script and shows the message
	die("Error: config.txt does not exist!");
}
