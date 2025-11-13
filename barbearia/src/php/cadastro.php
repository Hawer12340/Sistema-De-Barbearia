<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    // Verifica campos vazios
    if (empty($nome) || empty($email) || empty($senha)) {
        echo "<script>alert('Preencha todos os campos!'); window.location.href='cadastro.php';</script>";
        exit;
    }

    // Verifica se email já existe
    $stmt = mysqli_prepare($conn, "SELECT email FROM usuarios WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        echo "<script>alert('Email já cadastrado!'); window.location.href='cadastro.php';</script>";
        exit;
    }
    mysqli_stmt_close($stmt);

    // Criptografa a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Insere usuário
    $stmt = mysqli_prepare($conn, "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $senha_hash);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar usuário!'); window.location.href='cadastro.php';</script>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
 
 
 
 
 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Um site Sobre Barbearia Corte de Cabelo, Sombrancelha, Barba">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://cdn.boxicons.com/3.0.3/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <title>Tela de Login Muito Boa para Testes de Histórico</title>
</head>
<body>

    <h1>Cadastre-se Já!</h1>


    <form action="" method="post"
    <p>Usuário</p>
    <input type="text" name="Nome" id="Nome" placeholder="Nome">
    <i class='bxr  bx-user'    ></i> 
<p>Email</p>
    <input type="text" name="Email" id="Email" placeholder="Email">
    <i class='bxr  bx-mail-open'    ></i>  
    <p>Senha</p>
    <input type="password" name="Senha" id="Senha" placeholder="Senha">
    <i class='bxr  bx-lock'    ></i> 
    <p>Lembrar Senha<p>
    <input type="checkbox" name="lembrarSenha" id="lembrarSenha">
    <input type="submit" value="">
    </form>


</body>
</html>