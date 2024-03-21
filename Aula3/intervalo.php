<?php

$n1 = 50;
$n2 = 10;

$menor = min($n1,$n2);
$maior = max($n1,$n2);

for($i = $menor; $i <= $maior; $i++){
    if ($i % 2 == 0){
        echo "$i é par.<br>";
    } else {
        echo "$i é impar.<br>";
    }
}
?>