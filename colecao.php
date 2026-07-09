<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coleção — MilanoImports</title>
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
        <section class="colecao">

            <aside class="filtros">
                <h3>Categorias</h3>
                <ul>
                    <li><button class="btn-filtro ativo" data-filtro="todos">Todos</button></li>
                    <li><button class="btn-filtro" data-filtro="camisas">Camisas</button></li>
                    <li><button class="btn-filtro" data-filtro="bermudas">Bermudas & Calças</button></li>
                    <li><button class="btn-filtro" data-filtro="perfumes">Perfumes</button></li>
                    <li><button class="btn-filtro" data-filtro="acessorios">Acessórios</button></li>
                    <li><button class="btn-filtro" data-filtro="tenis">Tênis</button></li>
                </ul>

                <h3>Preço</h3>
                <ul>
                    <li><button class="btn-filtro" data-preco="200">Até R$ 200</button></li>
                    <li><button class="btn-filtro" data-preco="500">R$ 200 - R$ 500</button></li>
                    <li><button class="btn-filtro" data-preco="999">Acima de R$ 500</button></li>
                </ul>
            </aside>

            <div class="grade-colecao">

                <div class="produto" data-categoria="perfumes" data-preco="200">
                    <img src="Perfumes/Noble.jpeg" alt="Perfume Al Noble">
                    <h3>Al Noble</h3>
                    <p class="preco">R$ 200,00</p>
                    <button class="btn-comprar" onclick="comprar('Al Noble', 200.00, 'Perfumes/Noble.jpeg')">Comprar</button>
                </div>

                <div class="produto" data-categoria="camisas" data-preco="85">
                    <img src="Camisas/Zara.jpeg" alt="Camisa Zara">
                    <h3>Camisa Zara</h3>
                    <p class="preco">R$ 85,00</p>
                    <button class="btn-comprar" onclick="comprar('Camisa Zara', 85.00, 'Camisas/Zara.jpeg')">Comprar</button>
                </div>

                <div class="produto" data-categoria="bermudas" data-preco="115">
                    <img src="Bermuda/Bermuda-Baggy-cargo-jeans-prison-tribal-2.jpeg" alt="Bermuda Streetwear">
                    <h3>Bermuda Streetwear</h3>
                    <p class="preco">R$ 115,90</p>
                    <button class="btn-comprar" onclick="comprar('Bermuda Streetwear', 115.90, 'Bermuda/Bermuda-Baggy-cargo-jeans-prison-tribal-2.jpeg')">Comprar</button>
                </div>

                <div class="produto" data-categoria="acessorios" data-preco="535">
                    <img src="Acessorios/Relogio.jpeg" alt="Casio MDV">
                    <h3>MDV-10D-2A1V Casio</h3>
                    <p class="preco">R$ 535,00</p>
                    <button class="btn-comprar" onclick="comprar('MDV-10D-2A1V Casio', 535.00, 'Acessorios/Relogio.jpeg')">Comprar</button>
                </div>

                <div class="produto" data-categoria="camisas" data-preco="125">
                    <img src="Camisas/R9.jpeg" alt="R9">
                    <h3>Camisa R9 Streetwear</h3>
                    <p class="preco">R$ 125,00</p>
                    <button class="btn-comprar" onclick="comprar('Camisa R9 Streetwear', 125.00, 'Camisas/R9.jpeg')">Comprar</button>
                </div>

                <div class="produto" data-categoria="bermudas" data-preco="140">
                    <img src="Bermuda/bermuda-style-preta.jpeg" alt="bermudaComply">
                    <h3>Bermuda moletom - STYLE</h3>
                    <p class="preco">R$ 140,00</p>
                    <button class="btn-comprar" onclick="comprar('Bermuda moletom STYLE', 140.00, 'Bermuda/bermuda-style-preta.jpeg')">Comprar</button>
                </div>

                <div class="produto" data-categoria="acessorios" data-preco="49">
                    <img src="Acessorios/Brinco.jpeg" alt="Brinco">
                    <h3>Brinco collab Ronaldinho</h3>
                    <p class="preco">R$ 49,00</p>
                    <button class="btn-comprar" onclick="comprar('Brinco collab Ronaldinho', 49.00, 'Acessorios/Brinco.jpeg')">Comprar</button>
                </div>

                <div class="produto" data-categoria="camisas" data-preco="145">
                    <img src="Camisas/camisapreta.jpeg" alt="Comp Club">
                    <h3>Camisa Comp Club</h3>
                    <p class="preco">R$ 145,00</p>
                    <button class="btn-comprar" onclick="comprar('Camisa Comp Club', 145.00, 'Camisas/camisapreta.jpeg')">Comprar</button>
                </div>

                <div class="produto" data-categoria="perfumes" data-preco="512">
                    <img src="Perfumes/vulcan9_012026-F.jpeg" alt="Perfume Vulcan">
                    <h3>Vulcan</h3>
                    <p class="preco">R$ 512,00</p>
                    <button class="btn-comprar" onclick="comprar('Vulcan', 512.00, 'Perfumes/vulcan9_012026-F.jpeg')">Comprar</button>
                </div>

                <div class="produto" data-categoria="perfumes" data-preco="350">
                    <img src="Perfumes/Assad.jpeg" alt="Perfume Assad importado">
                    <h3>Assad</h3>
                    <p class="preco">R$ 350,00</p>
                    <button class="btn-comprar" onclick="comprar('Assad', 350.00, 'Perfumes/Assad.jpeg')">Comprar</button>
                </div>

                <div class="produto" data-categoria="camisas" data-preco="90">
                    <img src="Camisas/camisetaoversizedbranca-6502353c3bc96817b517552863304258-1024-1024.jpeg" alt="Camiseta oversized importada">
                    <h3>Camiseta Oversized Branca</h3>
                    <p class="preco">R$ 90,00</p>
                    <button class="btn-comprar" onclick="comprar('Camiseta Oversized Branca', 90.00, 'Camisas/camisetaoversizedbranca-6502353c3bc96817b517552863304258-1024-1024.jpeg')">Comprar</button>
                </div>

                <div class="produto" data-categoria="tenis" data-preco="790">
                    <img src="Tenis/airforce.jpeg" alt="Tênis Air Force importado">
                    <h3>Air Force Branco</h3>
                    <p class="preco">R$ 790,00</p>
                    <button class="btn-comprar" onclick="comprar('Air Force Branco', 790.00, 'Tenis/airforce.jpeg')">Comprar</button>
                </div>

                <div class="produto" data-categoria="tenis" data-preco="350">
                    <img src="Tenis/COURTVISION.jpeg" alt="COURTVISION">
                    <h3>Court Vision</h3>
                    <p class="preco">R$ 350,00</p>
                    <button class="btn-comprar" onclick="comprar('Court Vision', 350.00, 'Tenis/COURTVISION.jpeg')">Comprar</button>
                </div>

                <div class="produto" data-categoria="bermudas" data-preco="290">
                    <img src="Bermuda/calca.jpeg" alt="Calca">
                    <h3>Calça Baggy Jeans Com Chaveiro</h3>
                    <p class="preco">R$ 290,00</p>
                    <button class="btn-comprar" onclick="comprar('Calça Baggy Jeans Com Chaveiro', 290.00, 'Bermuda/calca.jpeg')">Comprar</button>
                </div>

            </div>

        </section>
    </main>

    <script src="colecao.js"></script>
    <script src="contador.js"></script>
    

</body>
</html>