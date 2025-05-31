<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universidade";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$ra = $_POST['ra'];
$email = $_POST['email'];
$curso = $_POST['curso'];

$sql = "INSERT INTO alunos (nome, ra, email, curso) VALUES ('$nome', '$ra', '$email', '$curso')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
