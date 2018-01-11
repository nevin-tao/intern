<?php
$count=1 ;
$n=5;
for($i=1; $i<=$n; $i++) {
    for ($k = 1; $k <= $i; $k++)
    {
        echo "$count";
        $count++;
        echo "&nbsp;";
    }  echo "<br>";
}
?>