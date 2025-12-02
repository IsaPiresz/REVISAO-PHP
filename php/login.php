<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="login-container">
    <h2>Faça o seu login</h2>

    <form method="POST" action="php/login.php">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required autocomplete="username" />

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required autocomplete="current-password" />

        <a class="forgot" href="#">Esqueci minha senha</a>

        <button type="submit">Entrar</button>

        <a class="register" href="cadastro.html">Ainda não tenho uma conta</a>
    </form>
</div>

</body>
</html>
