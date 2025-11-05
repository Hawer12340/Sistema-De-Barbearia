<?php
session_start();






?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Um site sobre barbearia - Corte de Cabelo, Sobrancelha, Barba">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Jura:wght@300..700&display=swap" rel="stylesheet">

    <!-- Ícones -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/barbearia/src/css/index.css">
</head>
<body>
    <main class="container">
        <form action="" method="post" class="login-form">
            <h1>LOGIN</h1>

            <div class="input-group">
                <p>Email</p>
                <div class="input-wrapper">
                    <img src="/barbearia/src/img/HyperX-Icon-Logo.png" alt="ícone email">
                    <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                </div>
            </div>

            <div class="input-group">
                <p>Senha</p>
                <div class="input-wrapper">
                    <img src="/barbearia/src/img/HyperX-Icon-Logo.png" alt="ícone senha">
                    <input type="password" name="Senha" id="Senha" placeholder="Digite sua senha" required>
                    <span class="lnr lnr-eye" id="toggleSenha"></span>
                </div>
            </div>

            <div class="checkbox-group">
                <label for="lembrarSenha" class="checkbox-custom">
                    <input type="checkbox" name="lembrarSenha" id="lembrarSenha">
                    <span class="checkmark"></span>
                    Lembrar Senha
                </label>
                <a href="#">Esqueceu a senha?</a>
            </div>

            <input type="submit" value="Login" class="btn-login">

            <p class="cadastro">
                Não tem uma conta? <a href="cadastro.php">Cadastrar-se</a>
            </p>
        </form>

        <footer>
            <h2>Nome da Empresa</h2>
            <img id="logoImg" src="/barbearia/src/img/HyperX-Icon-Logo.png" alt="logo">
        </footer>
    </main>

    <script src="/barbearia/src/js/index.js"></script>
</body>
</html>
