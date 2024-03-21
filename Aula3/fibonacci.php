<?php
/*function fibonacci($n){
    $s = array();
    for($i = 0; $i < $n; $i++){
        if($i <= 1) {
            $s[$i] = $i;
        } else {
            $s[$i]= $s[$i-1] + $s[$i-2];
        }
    }
    return $s;
}

$l=10;
$fs=fibonacci($l);

echo "os 10 primeiros numeros da sequencia são:\n";
foreach($fs as $index => $number){
    echo "$number\n";
}*/
//------------------------------------------------------------------
function fibonacci($n){
    $s = array();
    $i=0;
    while ($i < $n){
        if($i <= 1) {
            $s[$i] = $i;
        } else {
            $s[$i]= $s[$i-1] + $s[$i-2];
        }
        $i++;
    }
    return $s;
}

$l=10;
$fs=fibonacci($l);

echo "os 10 primeiros numeros da sequencia são:\n";
foreach($fs as $index => $number){
    echo "$number\n";
}
?>