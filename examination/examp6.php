<?php
$original = array( '1','2','3','4','5' );
echo 'Original array : '."<br>";
foreach ($original as $x)
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted );
echo " <br> After inserting '$' the array is : "."<br>";
foreach ($original as $x)
{echo "$x ";}
echo "<br>"
?>