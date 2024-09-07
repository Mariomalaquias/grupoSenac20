<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$nome = $_POST['name'];
$email = $_POST['email'];
$data_entrada = $_POST['data_entrada'];
$data_saida = $_POST['data_saida'];

$sql = "INSERT INTO reservas (nome, email, data_entrada, data_saida) VALUES ('$nome', '$email', '$data_entrada', '$data_saida')";

if ($conn->query($sql) === TRUE) {
    echo "Reserva cadastrada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>