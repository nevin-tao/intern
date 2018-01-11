<?php
$n = 5;
$count = 1;
for ($i = $n; $i > 0; $i--){
    for ($j = $i; $j < $n + 1; $j++) {
        if (strlen($count) < 2) {
            echo " &nbsp; " ." &nbsp;" . $count;
        } else{
            echo " &nbsp;" . $count;
        }
        $count++;
    }
    echo "<br/>";
}
?>