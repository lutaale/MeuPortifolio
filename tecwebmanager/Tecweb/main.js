const btnprestadores = document.querySelector('.btnprestadores')
const btnvisitantes = document.querySelector('.btnvisitantes')
const btnencomendas = document.querySelector('.btnencomendas')
const btnlogin_colaboradores = document.querySelector('.login_colaboradores')
const btncadastrar_colaborador = document.querySelector('.cadastrar_colaborador')

let box_cad_colaborador= document.querySelector('.box_cad_colaborador')
let container_login = document.querySelector('.container_login')
let box_prestadores = document.querySelector('.box_prestadores')
let box_visitantes = document.querySelector('.box_visitantes')
let box_encomendas = document.querySelector('.box_encomendas')

btnprestadores.onclick = ()=>{
    box_prestadores.classList.add('activeprestadores')
    box_visitantes.classList.remove('activevisitantes')
    box_encomendas.classList.remove('activeencomendas')
    container_login.classList.remove('activelogin')
    box_cad_colaborador.classList.remove('activebox_cad_colaborador')

}
btnvisitantes.onclick = ()=>{
    box_visitantes.classList.add('activevisitantes')
    box_prestadores.classList.remove('activeprestadores')
    box_encomendas.classList.remove('activeencomendas')
    container_login.classList.remove('activelogin')
    box_cad_colaborador.classList.remove('activebox_cad_colaborador')

}
btnencomendas.onclick = ()=>{
    box_encomendas.classList.add('activeencomendas')
    box_prestadores.classList.remove('activeprestadores')
    box_visitantes.classList.remove('activevisitantes')
    container_login.classList.remove('activelogin')
    box_cad_colaborador.classList.remove('activebox_cad_colaborador')

}
btnlogin_colaboradores.onclick = ()=>{
    container_login.classList.add('activelogin')
    box_prestadores.classList.remove('activeprestadores')
    box_visitantes.classList.remove('activevisitantes')
    box_encomendas.classList.remove('activeencomendas')
    box_cad_colaborador.classList.remove('activebox_cad_colaborador')

}

btncadastrar_colaborador.onclick = () =>{
    box_cad_colaborador.classList.add('activebox_cad_colaborador')
    box_prestadores.classList.remove('activeprestadores')
    box_visitantes.classList.remove('activevisitantes')
    box_encomendas.classList.remove('activeencomendas')
    container_login.classList.remove('activelogin')
}


document.ondblclick = ()=>{
    box_prestadores.classList.remove('activeprestadores')
    box_visitantes.classList.remove('activevisitantes')
    box_encomendas.classList.remove('activeencomendas')
    container_login.classList.remove('activelogin')
    box_cad_colaborador.classList.remove('activebox_cad_colaborador')

}



