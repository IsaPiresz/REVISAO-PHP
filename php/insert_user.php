<?php
require "conexao.php";

$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nome, $email, $senha);

if ($stmt->execute()) {
    echo "<script>alert('Usuário cadastrado com sucesso!'); 
    window.location.href='login.php';</script>";
} else {
    echo "<script>alert('Erro ao cadastrar!'); 
    window.location.href='cadastro.html';</script>";
}
?>
