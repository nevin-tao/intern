<?php
$original = array( '1','2','3','4','5' );
echo 'Original array : '."\n";
echo "<br>";
foreach ($original as $x)
{echo "$x ";}
echo "<br>";
$inserted = '$';
array_splice( $original, 3, 0, $inserted );
echo " \n After inserting '$' the array is : "."\n";
echo "<br>";
foreach ($original as $x)
{echo "$x ";}
echo "\n"
?>
