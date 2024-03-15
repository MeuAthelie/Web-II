<?php

$n = array(10, 4, 8, 15, 7);

$maior = $n[0];
foreach($n as $n){
    if($n > $maior){
        $maior = $n;
    }
}
echo "o maior numero é: $maior";
?>