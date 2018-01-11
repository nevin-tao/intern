<?php
$count=1;
$n=5;
for ($k=1;$k<=$n;$k++){
    for ($j=1;$j<=$k;$j++){
        echo "$count";
        $count++;
        echo "&nbsp;";
    }echo "<br>";
}
?>