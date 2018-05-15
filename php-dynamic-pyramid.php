<?php

$start	= microtime(TRUE);
$levels = 10;
$range	= range(3, $levels * 2, 2);
$range	= array_merge(array_reverse($range, TRUE), [1], $range);
array_walk_recursive($range, function($key) use($levels){ echo str_pad(str_repeat('*', $key), $levels * 2, ' ', STR_PAD_BOTH)."\n";});
echo "\n";
echo microtime(TRUE) - $start."\n";
echo "\n";