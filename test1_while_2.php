<?php
echo "Current PHP version: " . phpversion() . "<br>";

$start = microtime(true);

$i = 0;
while($i < 1000000) {
    $i++;
}

$end = microtime(true);

$result = $end - $start;

echo $result;
