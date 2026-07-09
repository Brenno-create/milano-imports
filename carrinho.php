<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho — MilanoImports</title>
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
        <section class="carrinho-pagina">

            <h1>Seu Carrinho</h1>

            <div class="carrinho-conteudo">

                <div class="carrinho-itens" id="carrinho-itens">
                    <p class="carrinho-vazio">Seu carrinho está vazio.</p>
                </div>

                <div class="carrinho-resumo">
                    <h3>Resumo do Pedido</h3>
                    <div class="resumo-linha">
                        <span>Subtotal</span>
                        <span id="subtotal">R$ 0,00</span>
                    </div>
                    <div class="resumo-linha">
                        <span>Frete</span>
                        <span>Grátis</span>
                    </div>
                    <div class="resumo-linha total">
                        <span>Total</span>
                        <span id="total">R$ 0,00</span>
                    </div>
                    <button class="btn-finalizar">Finalizar Compra</button>
                    <a href="colecao.php" class="btn-continuar">Continuar Comprando</a>
                </div>

            </div>

        </section>
    </main>

    <script src="carrinho.js"></script>
   

    

</body>
</html>