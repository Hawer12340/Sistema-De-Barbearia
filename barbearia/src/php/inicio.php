<?php 
$nome = "Hawer";



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
 <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Jura:wght@300..700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/barbearia/src/css/inicio.css">
    <title>inicio</title>
</head>
<body>
<header>
    <img id="menuHamburguer" src="/barbearia/src/img/menu.png" alt="Menu Hamburguer">
    <div id="menuOptions">
        <a href="#">Início</a>
        <a href="#">Ofertas</a>
        <a href="#">Combos</a>
        <a href="#">Planos</a>
        <a href="#">Agendamento</a>
    </div>
    <p id="bemVindo">Seja Bem Vindo, <?php echo $nome;?></p>
    <img id="carrinho" src="/barbearia/src/img/carrinho.png" alt="Carrinho de compras">
</header>

<main>
    <h1>Ofertas</h1>
    <div class="section">
        <div class="card">
            <p>Oferta 1</p>
            <img src="" alt="Oferta 1">
            <button>Comprar</button>
        </div>
        <div class="card">
            <p>Oferta 2</p>
            <img src="" alt="Oferta 2">
            <button>Comprar</button>
        </div>
        <div class="card">
            <p>Oferta 3</p>
            <img src="" alt="Oferta 3">
            <button>Comprar</button>
        </div>
        <div class="card">
            <p>Oferta 4</p>
            <img src="" alt="Oferta 4">
            <button>Comprar</button>
        </div>
    </div>

    <h1>Combos</h1>
    <div class="section">
        <div class="card">
            <p>Combo 1</p>
            <img src="" alt="Combo 1">
            <button>Comprar</button>
        </div>
        <div class="card">
            <p>Combo 2</p>
            <img src="" alt="Combo 2">
            <button>Comprar</button>
        </div>
        <div class="card">
            <p>Combo 3</p>
            <img src="" alt="Combo 3">
            <button>Comprar</button>
        </div>
        <div class="card">
            <p>Combo 4</p>
            <img src="" alt="Combo 4">
            <button>Comprar</button>
        </div>
    </div>

    <h1>Planos</h1>
    <div class="section">
        <div class="card">
            <p>Plano 1</p>
            <img src="" alt="Plano 1">
            <button>Assinar</button>
        </div>
        <div class="card">
            <p>Plano 2</p>
            <img src="" alt="Plano 2">
            <button>Assinar</button>
        </div>
        <div class="card">
            <p>Plano 3</p>
            <img src="" alt="Plano 3">
            <button>Assinar</button>
        </div>
        <div class="card">
            <p>Plano 4</p>
            <img src="" alt="Plano 4">
            <button>Assinar</button>
        </div>
    </div>

    <h1>Agendamento</h1>
    <div class="section">
        <div class="card">
            <p>Agendamento</p>
            <img src="" alt="Agendamento">
            <button>Agendar</button>
        </div>
    </div>
</main>

<script>
    // Toggle menu hamburguer
    const menuHamburguer = document.getElementById('menuHamburguer');
    const menuOptions = document.getElementById('menuOptions');

    menuHamburguer.addEventListener('click', () => {
        menuOptions.style.display = menuOptions.style.display === 'block' ? 'none' : 'block';
    });

    // Fechar menu ao clicar fora
    document.addEventListener('click', (e) => {
        if (!menuHamburguer.contains(e.target) && !menuOptions.contains(e.target)) {
            menuOptions.style.display = 'none';
        }
    });
</script>
</body>
</html>