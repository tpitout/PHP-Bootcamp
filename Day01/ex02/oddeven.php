#!/usr/bin/php
<?php
echo "ENTER A NUMBER: ";
$input = rtrim(fgets(STDIN));
if (is_numeric($input))
{
	if ($input % 2 == 0)
		echo "IT'S EVEN\n";
	else
		echo "IT'S ODD\n";
}
else 
{
	echo "ERROR: NUMBERS ONLY!\n";
}
?>
