<?php
    function somarNumeros($num1, $num2) {
        $soma = $num1 + $num2;
        echo "$num1 + $num2 = $soma";
    }

    somarNumeros(5, 4);
    echo "<br>";

    function sumirNumeros($num1, $num2) {
        $nums = array();
        for($i = 0; $i < 100; $i++) {
            array_push($nums, $i);
        }
        foreach($nums as $num) {
            if($num != $num1 && $num != $num2) {
            echo "$num, ";
            }
        }
    }
    sumirNumeros(5, 10);
?>