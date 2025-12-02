<?php
require "conexao.php";

$sql = "SELECT id, nome, email, criado_em FROM usuarios ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="home-container">
    <h1>Usuários cadastrados</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Criado em</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nome'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['criado_em'] ?></td>
            </tr>
        <?php } ?>
    </table>

    <a class="btn-home" href="home.php">Voltar</a>
</div>

</body>
</html>
