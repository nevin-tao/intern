<?php
$d1="1981-11-04";
$d2="2013-09-04";
$d3=strtotime ("$d2")-strtotime("$d1");
$d4=floor($d3/86400);
echo "$d4 วัน";



?>
