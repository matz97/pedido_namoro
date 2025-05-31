<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=relatorio_alunos.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "<table border='1'>
<tr>
    <th>Nome</th>
    <th>R.A</th>
    <th>Email</th>
    <th>Curso</th>
</tr>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universidade";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM alunos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>".$row["nome"]."</td>
            <td>".$row["ra"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["curso"]."</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='4'>Nenhum aluno cadastrado</td></tr>";
}

echo "</table>";

$conn->close();
?>
