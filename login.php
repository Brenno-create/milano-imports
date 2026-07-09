<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    if (empty($email) || empty($senha)) {
        $erro = 'Preencha email e senha!';
    } else {
        $usuarios = json_decode(file_get_contents('usuarios.json'), true);

        $encontrado = false;
        foreach ($usuarios as $u) {
            if ($u['email'] === $email && password_verify($senha, $u['senha'])) {
                $_SESSION['usuario'] = $email;
                $_SESSION['nome'] = $u['nome'];
                $encontrado = true;
                break;
            }
        }

        if ($encontrado) {
            $redirect = isset($_GET['redirect']) ? $_GET['redirect'] : 'index.php';
            header('Location: ' . $redirect);
            exit;
        } else {
            $erro = 'E-mail ou senha incorretos!';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — MilanoImports</title>
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
                <?php if (isset($_SESSION['usuario'])): ?>
                    <span class="usuario-logado">Olá, <?php echo $_SESSION['nome']; ?></span>
                    <a href="sair.php" class="sair">Sair</a>
                <?php else: ?>
                    <a href="login.php">Entrar</a>
                    <a href="cadastro.php" class="cadastro">Cadastre-se</a>
                <?php endif; ?>
                <a href="carrinho.php" class="btn-carrinho-nav">
                    &#128717;
                    <span class="carrinho-contador" id="carrinho-contador">0</span>
                </a>
            </div>
        </nav>
    </header>

    <main>
        <section class="login">
            <h1>Bem-vindo de volta</h1>
            <p>Acesse sua conta MilanoImports</p>

            <?php if (isset($erro)): ?>
                <p style="color:red; text-align:center; margin-bottom:16px;"><?php echo $erro; ?></p>
            <?php endif; ?>

            <form class="form-login" method="POST">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="senha" placeholder="Senha">
                <a href="#" class="esqueci">Esqueceu a senha?</a>
                <button type="submit">Entrar</button>
                <p class="sem-conta">Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>
            </form>
        </section>
    </main>

    <script src="contador.js"></script>

</body>
</html>