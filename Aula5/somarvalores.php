<?php
function somar_valores($valor1, $valor2) {
    $soma = $valor1 + $valor2;
    if ($soma < 0) {
        return 0;
    }
    return $soma;
}

// Exemplo de uso:
$valor1 = 10;
$valor2 = -15;
$resultado = somar_valores($valor1, $valor2);
echo "A soma é: " . $resultado;
?>