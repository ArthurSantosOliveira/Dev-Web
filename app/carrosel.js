const btnAnterior = document.querySelector('.btn-anterior');
const btnProximo = document.querySelector('.btn-proximo');
const cards = document.querySelector('.cards');
const cardDescricao = document.querySelectorAll('.cards-descricao');
const cardWidth = cardDescricao[0].offsetWidth;
let posicaoAtual = 0;

// Adiciona o evento de clique ao botão anterior
btnAnterior.addEventListener('click', () => {
  if (posicaoAtual > 0) {
    posicaoAtual--;
    cards.style.transform = `translateX(-${posicaoAtual * cardWidth}px)`;
  }
});

// Adiciona o evento de clique ao botão próximo
btnProximo.addEventListener('click', () => {
  if (posicaoAtual < cardDescricao.length - 1) {
    posicaoAtual++;
    cards.style.transform = `translateX(-${posicaoAtual * cardWidth}px)`;
  }
});
