<?php
function verificar_aprovacao($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;

    if ($media >= 6.00) {
        return "Aluno Aprovado";
    } elseif ($media >= 4.00) {
        return "Aluno em Recuperação";
    } else {
        return "Aluno Reprovado";
    }
}

// Exemplo de uso:
$nota1 = 7.5;
$nota2 = 5.0;
$resultado = verificar_aprovacao($nota1, $nota2);
echo "Resultado: $resultado";
?>