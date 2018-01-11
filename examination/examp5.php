<?php
$ceu = array("Italy"=>"Rome","Luxembourg"=>"Luxembourg","Belgium"=>"Brussel","Denmark"=>"Copenhagen","Finland"=>"Helsinki",
    "France"=>"Paris","Slovakia"=>"Bratislava","Slovenia"=>"Ljubljana","Germany"=>"Berlin","Greece"=>"Athens","Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam","Portugal"=>"Lisbon","Spain"=>"Madrid","Sweden"=>"Stockholm","United Kingdon"=>"London","Cyprus"=>"Nicosia",
    "Lithuania"=>"Vilnius","Czech Republic"=>"Prague","Estonia"=>"Tallin","Hungary"=>"Budapest","Latvia"=>"Riga","Malta"=>"Valetta",
    "Austria"=>"Vienna","Poland"=>"Warsaw");



    foreach ($ceu as $p => $p_value){
        echo "The capital of $p"."&nbsp"."is $p_value";
        echo "<br>";
    }
echo "<br>";
?>