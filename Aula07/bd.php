<?php
//Configurações do BD
$dsn = 'mysql:host=localhost;dbname=cadastro';
$username = 'root';
$password = '';

try {

$pdo = new PDO($dsn, $username, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];

    $sql = "insert into lista (nome,data_nascimento, cidade,bairro) VALUES (:nome, :data_nascimento, :cidade, :bairro)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindValue(':data_nascimento', $data_nascimento, PDO::PARAM_STR);
    $stmt->bindValue(':cidade', $cidade, PDO::PARAM_STR);
    $stmt->bindValue(':bairro', $bairro, PDO::PARAM_STR);

    $stmt->execute();

    echo "Dados inseridos com sucesso!";

}
} catch(PDOException $e){

    echo "Erro: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link
            href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
            rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h2 class="text-2x1 font-bold mb-4">Insira seus dados:</h2>
        <form method="POST" class="max-w-lg">
            <div class="mb-4">
                <label for="nome" class="block text-gray-700">Nome:</label>
                <input type="text" name="nome" id="nome" required="required" class="form-input mt-1 block w-full">
    </div>
    <div class="mb-4">
                <label for="data_nascimento" class="block text-gray-700">data_nascimento:</label>
                <input type="date" name="data_nascimento" id="data_nascimento" required="required" class="form-input mt-1 block w-full">
    </div>
    <div class="mb-4">
                <label for="cidade" class="block text-gray-700">cidade:</label>
                <input type="text" name="cidade" id="cidade" required="required" class="form-input mt-1 block w-full">
    </div>
    <div class="mb-4">
                <label for="bairro" class="block text-gray-700">bairro:</label>
                <input type="text" name="bairro" id="bairro" required="required" class="form-input mt-1 block w-full">
    </div>

    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar
    </button>
    </form>
</div>
</body>
</html>