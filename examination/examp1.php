<?php
echo"<form action=\"\" method=\"post\" name=\"form1\">

<input type=\"text\" name=\"txtSiteName\">

<input name=\"btnSubmit\" type=\"submit\" value=\"Submit\">

</form>";
$p=$_POST['txtSiteName'];


for($j=1;$j<=$p;$j++){
    for($k=1;$k<=$j;$k++) {
            echo "$k";
            if($j==$k){
            echo "<br>";
        }

    }
}
for($j=$p-1;$j>=1;$j--) {
    for($k=1;$k<=$j;$k++) {
        echo "$k";
        if($j==$k){
            echo "<br>";
        }

    }
}

?>
