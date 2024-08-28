
function validateForm() {
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var dataEntrada = document.getElementById("data_entrada").value;
    var dataSaida = document.getElementById("data_saida").value;

    if (new Date(dataEntrada) > new Date(dataSaida)) {
        alert("A data de saída não pode ser anterior à data de entrada.");
        return false;
    }

    return true;
}