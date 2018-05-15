<?php
/**
 * Two-side pyramid
 */

echo "Two-side pyramid: \n";
echo "\n";
$start	= microtime(TRUE);
$levels = 10;
$range	= range(3, $levels * 2, 2);
$range	= array_merge(array_reverse($range, TRUE), [1], $range);
array_walk_recursive($range, function($key) use($levels){ echo str_pad(str_repeat('*', $key), $levels * 2, ' ', STR_PAD_BOTH)."\n";});
echo "\n";
echo microtime(TRUE) - $start."\n";
echo "\n";

/**
 * One-side-up pyramid
 */

echo "One-side-up pyramid: \n";

echo "\n";
$start	= microtime(TRUE);
$levels = 20;
$range	= range(1, $levels * 1, 2);
//$range	= array_merge($range, [1], array_reverse($range, TRUE));
array_walk_recursive($range, function($key) use($levels){ echo str_pad(str_repeat('*', $key), $levels * 1, ' ', STR_PAD_BOTH)."\n";});
echo "\n";
echo microtime(TRUE) - $start."\n";
echo "\n";

/**
 * One-side-bottom pyramid
 */

echo "One-side-bottom pyramid: \n";

echo "\n";
$start	= microtime(TRUE);
$levels = 20;
$range	= range(1, $levels * 1, 2);
$range	= array_reverse($range, TRUE);
array_walk_recursive($range, function($key) use($levels){ echo str_pad(str_repeat('*', $key), $levels * 1, ' ', STR_PAD_BOTH)."\n";});
echo "\n";
echo microtime(TRUE) - $start."\n";
echo "\n";