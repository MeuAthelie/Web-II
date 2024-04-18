<html>
    <body>
        <form method="POST">
            <label for="num1">Primeiro número: </label> <input type="number" name="num1"> <br>
            <label for="num2">Segundo número: </label> <input type="number" name="num2"> <br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    function contaPrimos($num1, $num2) {
        $numeros = array();
        $primos = 0;
        for($i = $num1; $i <= $num2; $i++) {
            $divisores = 0;
            for($c = 1; $c <= $i; $c++) {
                if($i % $c == 0) {
                    $divisores++;
                }
            }
            if($divisores == 2) {
                $primos++;
                array_push($numeros, $i);
            }
        }
        echo "Existem $primos números primos entre $num1 e $num2 <br>";
        foreach($numeros as $numero) {
            echo "$numero ";
        }
    }

    if(isset($_POST["num1"]) && isset($_POST["num2"])) {
        contaPrimos($_POST["num1"], $_POST["num2"]);
    }
?>