<?php 
$a = 1;
$b = 0;
$c = 15;

$rPos = (-$b + sqrt(($b ** 2) - (4 * $a * $c))) / (2*$a);
$rNeg = (-$b - sqrt(($b ** 2) - (4 * $a * $c))) / (2*$a);

if(is_nan($rPos)){
    echo "La equación no tiene primer valor <br>";
}

if(is_nan($rNeg)){
    echo "La equación no tiene segundo valor";
}

if ($rPos == $rNeg) {
    echo $rPos;
} else {
    echo $rPos . "<br>";
    echo $rNeg;
}

?>

<!-- http://localhost/BasicPHP/1002equacio2g.php?a=1&b=2&c=-15 -->