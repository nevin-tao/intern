<?php
$n = 11;
$f = 1;
for ($i = $n; $i > 0; $i--)
{
    for ($j = $i; $j < $n + 1; $j++)
    {
        echo $f;
        $f++;
    }
    echo "<br>";
}
?>
