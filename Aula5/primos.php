<?php
function ContaPrimos($inicio, $fim) {
    $contadorPrimos = 0;

    // Função para verificar se um número é primo
    function ehPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // AItera pelos números no intervalo e conta os primos
    for ($num = $inicio; $num <= $fim; $num++) {
        if (ehPrimo($num)) {
            $contadorPrimos++;
        }
    }

    return $contadorPrimos;
}

// Exemplo de uso:
$inicio = 3;
$fim = 10;
$resultado = ContaPrimos($inicio, $fim);
echo "O número de primos entre $inicio e $fim é: $resultado";
?>