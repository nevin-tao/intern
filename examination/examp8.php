<?php
$day1 = "1981-11-04";
$day2 = "2013-09-04";
$vi = abs(strtotime($day1) - strtotime($day2));
$y = floor($vi / (365*24*60*60));
$m = floor(($vi - $y * 365*24*60*60) / (30*24*60*60));
$d = floor(($vi - $y * 365*24*60*60 - $m * 30*24*60*60)/ (24*60*60));
printf("%d years %d months %d days", $y, $m, $d);
?>