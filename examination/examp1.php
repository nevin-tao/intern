<?php
for ($j=1 ; $j<=5 ; $j++)
{
    for ($k=1 ; $k<=$j ;$k++)
    {
        echo"*";
        if($j==$k)
        {
            echo "<br>";
        }
    }
}
for ($j=5 ; $j>=1 ; $j--)
{
    for ($k=1 ; $k<=$j ; $k++ )
    {
        echo"*";
        if($k==$j)
        {
            echo "<br>";
        }
    }
}
?>




