<html>
    <body>
        <form method="POST">
            <label for="f1">Nota 1: </label> <input type="number" name="f1"> <br>
            <label for="f2">Nota 2: </label> <input type="number" name="f2"> <br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    function nota($f1, $f2) {
        $nota = ($f1 + $f2) / 2;
        if($nota >= 6) {
            echo "Aluno aprovado <br>";
        }
        else if($nota >= 4) {
            echo "Aluno em recuperação";
        }
        else {
            echo "Aluno reprovado";
        }
    }
    
    if(isset($_POST["f1"]) && isset($_POST["f2"])) {
        nota($_POST["f1"], $_POST["f2"]);
    }
?>