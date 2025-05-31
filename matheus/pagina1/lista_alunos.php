<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universidade";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM alunos ORDER BY nome ASC";
$result = $conn->query($sql);

echo "<h1>Lista de Alunos Cadastrados</h1>";
echo "<table border='1'>
        <tr>
            <th>ID</th><th>Nome</th><th>R.A</th><th>Email</th><th>Curso</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['ra']}</td><td>{$row['email']}</td><td>{$row['curso']}</td>
         </tr>";
}

echo "</table>";

$conn->close();
?>
