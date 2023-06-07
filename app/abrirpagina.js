function AddCarrinho(produto, qtd, valor, posicao)
      {
        localStorage.setItem("produto" + posicao, produto);
        localStorage.setItem("qtd" + posicao, qtd);
        valor = valor * qtd;
        localStorage.setItem("valor" + posicao, valor);
        alert("Produto adicionado ao carrinho!");
      }

      
function fazerpedido()
      {
        alert("Pedido realizado com sucesso!");
      }
function abrirPagina() {
  window.location.href = "../html/camisa.html";
}

function abrirPagina2() {
  window.location.href = "../html/garrafa.html";
}

function abrirPagina3() {
window.location.href = "../html/capacete.html";
}

function abrirPagina4() {
window.location.href = "../html/camisaciclismo.html";
}

function abrirPagina5() {
window.location.href = "../html/oculos.html";
}

function abrirPagina6() {
window.location.href = "../html/suporte.html";
}

function abrirPagina7(){
  window.location.href = "../html/suportesqueeze.html";
}

function abrirPagina8(){
  window.location.href = "../html/lanterna.html";
}

function abrirPagina9(){
  window.location.href = "../html/velocimetro.html";
}

function abrirPagina10(){
  window.location.href = "../html/cadeados.html";
}

function abrirPagina11(){
  window.location.href = "../html/bolsabike.html";
}

function abrirPagina12(){
  window.location.href = "../html/bombadear.html";
}

function abrirPagina13(){
  window.location.href = "../html/paralamas.html";
}

function abrirPagina14(){
  window.location.href = "../html/bolsaagua.html";
}

function abrirPagina15(){
  window.location.href = "../html/bolsacelular.html";
}

function abrirPagina16(){
  window.location.href = "../html/ferramentas.html";
}

function abrirPagina17(){
  window.location.href = "../html/short.html";
}

function abrirPagina18(){
  window.location.href = "../html/descanso.html";
}





