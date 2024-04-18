<html>
    <body>
        <form method="POST">
            <label for="num1">Primeiro número: </label> <input type="number" name="num1"><br>
            <label for="num2">Segundo número: </label> <input type="number" name="num2"><br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    function some($num1, $num2) {
        $soma = $num1 + $num2;
        if($soma < 0) {
            echo "0 <br>"; 
        }
        else {
            echo "$num1 + $num2 = $soma <br>";
        }
    }

    if(isset($_POST["num1"]) && isset($_POST["num2"])) {
        some($_POST["num1"], $_POST["num2"]);
    }
?>