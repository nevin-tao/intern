<?php
for ($j = 1; $j <= 6; $j++) {
    for ($k = 1; $k <=6; $k++) {
        if ($k == 1) {
            echo str_pad($j*$k, 2, " ", STR_PAD_LEFT);
        } else {
            echo str_pad($j*$k, 4, " ", STR_PAD_LEFT);
        }
    }
    echo "<br>";
}
?>
