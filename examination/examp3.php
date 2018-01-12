<?php

for ($row=0; $row <7; $row++){

    for ($column=0; $column < 5; $column++) {

        if ((($row == 0 or $row == 6) and $column >= 0 and $column <= 6) or $row+$column==5)

            echo "*";
        else

            echo "&nbsp;";
    }
    echo "<br>";

}

?>
