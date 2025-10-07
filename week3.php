<?php
//$sum = sum (4,5);
//echo($sum);

function sum($a,$b) {
    return $a + $b;
}


function biggest ($a, $b, $c){
    if ($a > $b && $a > $c)
        echo (" So lon nhat la:" .$a);
    else if ($b > $a && $b > $c)
        echo ("So lon nhat la:" .$b);
    else if ($c > $a && $c > $b)
        echo ("So lon nhat la:" .$c);
}

$a = 3;
$b = 4;
$c = 5;
biggest ($a, $b, $c);
?>
