<?php
$n = 5;
$p = 1;
for ($i = $n; $i > 0; $i--) {
    for ($j = $i; $j < $n + 1; $j++) {
        echo $p;
        $p++;
    }
    echo "<br>";
}
?>