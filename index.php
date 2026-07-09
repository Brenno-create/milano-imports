<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MilanoImports</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <nav class="navegacao">
            <ul class="inicio">
                <li><a href="index.php">Início</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="colecao.php">Coleção</a></li>
                <li><a href="ajuda.php">Ajuda</a></li>
            </ul>

            <a href="index.php" class="logo">MILANO<span>IMPORTS</span></a>

            <div class="auth">
                <a href="login.php">Entrar</a>
                <a href="cadastro.php" class="cadastro">Cadastre-se</a>
                <a href="carrinho.php" class="btn-carrinho-nav">
                        &#128717;
                <span class="carrinho-contador" id="carrinho-contador">0</span>
                </a>
            </div>
        </nav>
    </header>

    <main>
        <section class="banner">
            <h1>O Luxo pertence a quem tem essência.</h1>
            <p>Perfumes, roupas e tênis importados selecionados para você</p>

            <div class="galeria">
                <div class="card-img" id="img-perfume">
                    <img src="Perfumes/Assad.jpeg" alt="Perfume Assad importado">
                    <a href="colecao.php?categoria=perfumes" class="btn-ver-colecao">Ver Coleção</a>
                </div>

                <div class="card-img" id="img-roupa">
                    <img src="Camisas/camisetaoversizedbranca-6502353c3bc96817b517552863304258-1024-1024.jpeg" alt="Camiseta oversized importada">
                     <a href="colecao.php?categoria=camisas" class="btn-ver-colecao">Ver Coleção</a>
                </div>

                <div class="card-img" id="img-tenis">
                    <img src="Tenis/airforce.jpeg" alt="Tênis Air Force importado">
                     <a href="colecao.php?categoria=tenis" class="btn-ver-colecao">Ver Coleção</a>
                </div>
            </div>
        </section>
    </main>

    <script src="contador.js"></script>
    

</body>
</html>