var qtdPedidos = document.querySelector('.qtd-pedidos');
var mediaBones = document.querySelector('.media-bones');
var qtdBones = document.querySelector('.qtd-bones');
var qtd = document.querySelectorAll('.qtd');

var totalBones = 0;
var totalPedidos = qtd.length;
var mediaDia = 0;

for(let i=0; i<qtd.length; i++){
    totalBones += parseInt(qtd[i].textContent);
    qtdBones.innerHTML = totalBones;
    qtdPedidos.innerHTML = totalPedidos;

    mediaDia = (totalBones / 7);
    mediaBones.innerHTML = parseInt(mediaDia);
}

/* MODAL ADD */

var addPedido = document.querySelectorAll('a')[3];
var fecharModal = document.querySelector('.cancel');

addPedido.addEventListener('click', (e)=> {
    e.preventDefault();
    let modal = document.querySelector('.modal');
    modal.classList.add('off');
})

fecharModal.addEventListener('click', (e)=>{
    e.preventDefault();
    let modal = document.querySelector('.modal.off');
    modal.classList.remove('off');
})

/* MODAL data */
var modalData = document.querySelectorAll('a')[2];
var modalDataFecha = document.querySelector('.close-data');

modalData.addEventListener('click', ()=> {
    let modal = document.querySelector('.modal-data');
    modal.classList.add('off-data');
})

modalDataFecha.addEventListener('click', ()=> {
    let modal = document.querySelector('.modal-data');
    modal.classList.remove('off-data');
})

/* MODAL buscar */
var modalBuscar = document.querySelectorAll('a')[4];
var modalBuscarFecha = document.querySelector('.close-buscar');

modalBuscar.addEventListener('click', () =>{
    let modal = document.querySelector('.modal-buscar');
    modal.classList.add('off-buscar');
})