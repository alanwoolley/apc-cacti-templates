<?php
/**
 * Retrieve APC statistics
 *
 * @author Alan Woolley <alan@armedpineapple.co.uk>
 * @copyright 2013 Alan Woolley
 * @license MIT
 * @version 1.0
 * @link http://www.github.com/alanwoolley/apc-cacti-templates
*/


$fileCacheInfo = apc_cache_info();
$userCacheInfo = apc_cache_info('user');
$memoryInfo = apc_sma_info();

function printvar($name, $value) {
	print $name . ":" . $value . " ";
}

printvar("file_entries", $fileCacheInfo['num_entries']);
printvar("file_size", $fileCacheInfo['mem_size']);
printvar("file_hits", $fileCacheInfo['num_hits']);
printvar("file_misses", $fileCacheInfo['num_misses']);
printvar("file_inserts", $fileCacheInfo['num_inserts']);

printvar("user_entries", $userCacheInfo['num_entries']);
printvar("user_size", $userCacheInfo['mem_size']);
printvar("user_hits", $userCacheInfo['num_hits']);
printvar("user_misses", $userCacheInfo['num_misses']);
printvar("user_inserts", $userCacheInfo['num_inserts']);

printvar("available_memory", $memoryInfo['avail_mem']);
printvar("segment_size", $memoryInfo['seg_size']);
printvar("number_of_segments", $memoryInfo['num_seg']);

printvar("uptime", time() - $fileCacheInfo['start_time']);

?>
