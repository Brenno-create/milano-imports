const carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
const total = carrinho.reduce((acc, p) => acc + p.quantidade, 0);
document.getElementById('carrinho-contador').textContent = total;