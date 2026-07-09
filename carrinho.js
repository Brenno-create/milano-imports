const params = new URLSearchParams(window.location.search);
const nome = params.get('nome');
const preco = params.get('preco');
const img = params.get('img');

let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

if (nome && preco && img) {
    const existe = carrinho.find(p => p.nome === nome);
    if (existe) {
        existe.quantidade++;
    } else {
        carrinho.push({
            nome: nome,
            preco: parseFloat(preco),
            img: img,
            quantidade: 1
        });
    }
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
    window.history.replaceState({}, '', 'carrinho.php');
}

renderizarCarrinho();

function renderizarCarrinho() {
    const itensEl = document.getElementById('carrinho-itens');
    const subtotalEl = document.getElementById('subtotal');
    const totalEl = document.getElementById('total');

    if (carrinho.length === 0) {
        itensEl.innerHTML = '<p class="carrinho-vazio">Seu carrinho está vazio.</p>';
        return;
    }

    let total = 0;
    let html = '';

    carrinho.forEach((item, index) => {
        total += item.preco * item.quantidade;
        html += `
            <div class="carrinho-item">
                <img src="${item.img}" alt="${item.nome}">
                <div class="item-info">
                    <h4>${item.nome}</h4>
                    <p class="item-preco">R$ ${item.preco.toFixed(2).replace('.', ',')}</p>
                    <div class="item-quantidade">
                        <button onclick="mudarQuantidade(${index}, -1)">−</button>
                        <span>${item.quantidade}</span>
                        <button onclick="mudarQuantidade(${index}, 1)">+</button>
                    </div>
                </div>
                <button class="remover-item" onclick="removerItem(${index})">×</button>
            </div>
        `;
    });

    itensEl.innerHTML = html;
    subtotalEl.textContent = `R$ ${total.toFixed(2).replace('.', ',')}`;
    totalEl.textContent = `R$ ${total.toFixed(2).replace('.', ',')}`;
}

function mudarQuantidade(index, valor) {
    carrinho[index].quantidade += valor;
    if (carrinho[index].quantidade <= 0) carrinho.splice(index, 1);
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
    renderizarCarrinho();
}

function removerItem(index) {
    carrinho.splice(index, 1);
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
    renderizarCarrinho();
}

// FINALIZAR COMPRA
document.querySelector('.btn-finalizar').addEventListener('click', () => {
    const usuarioLogado = localStorage.getItem('usuario');
    
    if (!usuarioLogado) {
        window.location.href = 'login.php?redirect=carrinho.php';
    } else {
        alert('Pedido finalizado com sucesso!');
    }
});