const btnlista_prestadores = document.querySelector('.lista_prestadores')
const btnlista_visitantes = document.querySelector('.lista_visitantes')
const btnencomendas = document.querySelector('.encomendas')

let boxencomendas = document.querySelector('.boxencomendas')
let boxlistavisitantes = document.querySelector('.boxlistavisitantes')
let box_listaprestadores = document.querySelector('.box_listaprestadores')

btnlista_prestadores.onclick = ()=>{
    box_listaprestadores.classList.add('activebox_listaprestadores')
    boxlistavisitantes.classList.remove('activeboxlistavisitantes')
    boxencomendas.classList.remove('activeboxencomendas')

}
btnlista_visitantes.onclick = ()=>{
    boxlistavisitantes.classList.add('activeboxlistavisitantes')
    box_listaprestadores.classList.remove('activebox_listaprestadores')
    boxencomendas.classList.remove('activeboxencomendas')
}
btnencomendas.onclick = ()=>{
    boxencomendas.classList.add('activeboxencomendas')
    boxlistavisitantes.classList.remove('activeboxlistavisitantes')
    box_listaprestadores.classList.remove('activebox_listaprestadores')

}

document.ondblclick = ()=>{
    boxlistavisitantes.classList.remove('activeboxlistavisitantes')
    box_listaprestadores.classList.remove('activebox_listaprestadores')
    boxencomendas.classList.remove('activeboxencomendas')
}