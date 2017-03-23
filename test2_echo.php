<?php
echo "Current PHP version: " . phpversion() . "<br>";

$start = microtime(true);

$i = 0;

for ($i = 0; $i < 1000000; $i++) {
	echo a;
}

$end = microtime(true);

$result = $end - $start;

echo "<br>";
echo $result;
