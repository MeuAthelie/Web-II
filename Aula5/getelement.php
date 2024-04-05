<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de GetElement</title>
    <script>
        function mudacor(novacor) {
            const elem = document.getelementbyid("paragrafo");
            elem.style.color = novacor;
        }
    </script>>
</head>
<body>
    <p id="paragrafo">Textinho</p>
    <button onclick="mudacor('blue');">blue</button>
    <button onclick="mudacor('red');">red</button>
    
</body>
</html>