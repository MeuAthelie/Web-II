let button = document.getElementById("enviar");
button.addEventListener("click", function () {
    let output = document.getElementById("output");

    let nome = document.getElementById("nome").value;
    let idade = document.getElementById("idade").value;


    output.innerHTML = `Olá, ${nome}, com ${idade} anos`;
});