<?php
$value=100;
$i=1;
while($i<=$value)
{
    $c=0;
    for($j=1;$j<=$i;$j++)
    {
        if($i%$j==0)$c++;
    }
    if($c==2)echo($i)."<br>";
    $i++;
}
?>
