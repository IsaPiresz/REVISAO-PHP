<?php
// (Opcional) Verifica se o usuário está logado
// session_start();
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="home-container">
    <h1>Bem-vindo 👋</h1>
    <p class="subtitle">Escolha uma das opções abaixo</p>

    <div class="buttons">
        <a class="btn-home" href="cadastro.html">Cadastrar Usuário</a>
        <a class="btn-home" href="listar_user.php">Listar Usuários</a>
        <a class="btn-home logout" href="login.php">Sair</a>
    </div>
</div>

</body>
</html>
