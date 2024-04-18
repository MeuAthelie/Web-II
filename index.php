<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $nome = "Mafalda";
    $salario = 1450.22;
    $aumento = 1.5;

    echo "<p>Funcionário: $nome </p>";
    echo "<p>Salário base: R$ $salario </p>";
    echo "<p>Salário com aumento: R$ " . $salario * $aumento;
?>

</body>
</html>