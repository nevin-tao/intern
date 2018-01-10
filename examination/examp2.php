<table>
    <?php

    for($j=1; $j<=6; $j++)
    {
        echo "<tr>";
        for($k=1; $k<=6; $k++)
        {
            echo "<td>";
            $i=$j*$k;
            echo "$i";
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>