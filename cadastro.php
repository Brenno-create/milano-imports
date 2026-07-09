<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];
    $confirmar = $_POST['confirmar'];

    if (empty($nome) || empty($email) || empty($senha) || empty($confirmar)) {
        $erro = 'Preencha todos os campos!';
    } elseif ($senha !== $confirmar) {
        $erro = 'As senhas não coincidem!';
    } elseif (strlen($senha) < 6) {
        $erro = 'A senha deve ter pelo menos 6 caracteres!';
    } else {
        $usuarios = json_decode(file_get_contents('usuarios.json'), true);

        foreach ($usuarios as $u) {
            if ($u['email'] === $email) {
                $erro = 'Este e-mail já está cadastrado!';
                break;
            }
        }

        if (!isset($erro)) {
            $usuarios[] = [
                'nome' => $nome,
                'email' => $email,
                'senha' => password_hash($senha, PASSWORD_DEFAULT)
            ];

            file_put_contents('usuarios.json', json_encode($usuarios));

            $_SESSION['usuario'] = $email;
            $_SESSION['nome'] = $nome;

            header('Location: index.php');
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro — MilanoImports</title>
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
                    <a href="cadastro.php" class="cadastro-btn">Cadastre-se</a>
                <?php endif; ?>
                <a href="carrinho.php" class="btn-carrinho-nav">
                    &#128717;
                    <span class="carrinho-contador" id="carrinho-contador">0</span>
                </a>
            </div>
        </nav>
    </header>

    <main>
        <section class="secao-cadastro">
            <h1>Faça seu cadastro</h1>
            <p>Crie sua conta MilanoImports</p>

            <?php if (isset($erro)): ?>
                <p style="color:red; text-align:center; margin-bottom:16px;"><?php echo $erro; ?></p>
            <?php endif; ?>

            <form class="milano-cadastro" method="POST">
                <input type="text" name="nome" placeholder="Nome completo">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="senha" placeholder="Senha">
                <input type="password" name="confirmar" placeholder="Confirme sua senha">
                <button type="submit">Finalizar Cadastro</button>
                <p class="sem-conta">Já tem conta? <a href="login.php">Entrar</a></p>
            </form>
        </section>
    </main>

    <script src="contador.js"></script>

</body>
</html>