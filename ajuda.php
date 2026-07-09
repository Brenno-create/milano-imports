<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuda — MilanoImports</title>
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
                <a href="cadastro.php" class="cadastro-btn">Cadastre-se</a>
                <a href="carrinho.php" class="btn-carrinho-nav">
                        &#128717;
                <span class="carrinho-contador" id="carrinho-contador">0</span>
                </a>
            </div>
        </nav>
    </header>

    <main>
        <section class="ajuda">

            <div class="ajuda-topo">
                <h1>Central de Ajuda</h1>
                <p>Estamos aqui para tornar sua experiência incrível.</p>
            </div>

            <div class="ajuda-conteudo">

                <div class="ajuda-bloco">
                    <h2>Como comprar?</h2>
                    <p>É simples e rápido. Navegue pela nossa coleção, escolha o produto que você curtiu, clique em <strong>Finalizar Compra</strong> e preencha seus dados. Aceitamos cartão de crédito, débito e Pix. Após a confirmação do pagamento, seu pedido já entra em separação.</p>
                </div>

                <div class="ajuda-bloco">
                    <h2>Tempo de entrega</h2>
                    <p>Como trabalhamos com produtos importados, o prazo de entrega é de <strong>7 a 15 dias úteis</strong> para todo o Brasil. Assim que seu pedido for despachado, você receberá um e-mail com o código de rastreamento para acompanhar tudo em tempo real.</p>
                </div>

                <div class="ajuda-bloco">
                    <h2>Trocas e devoluções</h2>
                    <p>Recebeu algo diferente do esperado? Sem estresse. Você tem até <strong>7 dias corridos</strong> após o recebimento para solicitar troca ou devolução. O produto precisa estar sem uso e com a embalagem original. É só entrar em contato com nosso suporte.</p>
                </div>

                <div class="ajuda-bloco">
                    <h2>Meu pedido não chegou</h2>
                    <p>Se o prazo de entrega já passou e você ainda não recebeu seu pedido, entre em contato com a gente pelo e-mail de suporte. Nossa equipe vai verificar o que aconteceu e resolver o mais rápido possível para você.</p>
                </div>

            </div>

            <div class="ajuda-contato">
                <h2>Ainda tem dúvidas?</h2>
                <p>Fala com a gente! Nossa equipe responde em até <strong>24 horas</strong>.</p>
                <a href="mailto:suporte@milanoimports.com" class="btn-email">
                    suporte@milanoimports.com
                </a>
            </div>

        </section>
    </main>

    <script src="contador.js"></script>


</body>
</html>