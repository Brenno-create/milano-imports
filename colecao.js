const botoes = document.querySelectorAll('.btn-filtro');
const produtos = document.querySelectorAll('.produto');

botoes.forEach(botao => {
    botao.addEventListener('click', () => {

        botoes.forEach(b => b.classList.remove('ativo'));
        botao.classList.add('ativo');

        const filtro = botao.dataset.filtro;
        const preco = botao.dataset.preco;

        produtos.forEach(produto => {
            const categoria = produto.dataset.categoria;
            const precoProduto = parseInt(produto.dataset.preco);

            if (filtro) {
                if (filtro === 'todos' || categoria === filtro) {
                    produto.style.display = 'block';
                } else {
                    produto.style.display = 'none';
                }
            }

            if (preco) {
                if (preco === '200' && precoProduto <= 200) {
                    produto.style.display = 'block';
                } else if (preco === '500' && precoProduto > 200 && precoProduto <= 500) {
                    produto.style.display = 'block';
                } else if (preco === '999' && precoProduto > 500) {
                    produto.style.display = 'block';
                } else if (preco) {
                    produto.style.display = 'none';
                }
            }
        });
    });
});

// FUNÇÃO COMPRAR
function comprar(nome, preco, img) {
    window.location.href = `carrinho.php?nome=${encodeURIComponent(nome)}&preco=${preco}&img=${encodeURIComponent(img)}`;
}

