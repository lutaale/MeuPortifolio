
function showbtns1() {
    document.getElementById('proj1').setAttribute('style', 'opacity:1')
    document.getElementById('proj2').setAttribute('style', 'opacity:0')
    document.getElementById('proj3').setAttribute('style', 'opacity:0')

}
function showbtns2() {
    document.getElementById('proj2').setAttribute('style', 'opacity:1')
    document.getElementById('proj1').setAttribute('style', 'opacity:0')
    document.getElementById('proj3').setAttribute('style', 'opacity:0')

}
function showbtns3() {
    document.getElementById('proj3').setAttribute('style', 'opacity:1')
    document.getElementById('proj1').setAttribute('style', 'opacity:0')
    document.getElementById('proj2').setAttribute('style', 'opacity:0')

}


const btnmenu = document.getElementById('menubtn')

const btnarea = document.querySelector('.btnarea')

btnmenu.addEventListener('click', showmenu)
function showmenu() {
    btnarea.classList.toggle('activebtnarea')
    btnmenu.classList.toggle('menubtnback')
}

//============================================================
const btnhome = document.getElementById('btnhome')
const btnprojetos = document.getElementById('btnprojetos')
const btncontatos = document.getElementById('btncontatos')
const btnskills = document.getElementById('btnskills')
const btnsaibamais =document.getElementById('saibamaisbtn')

btnhome.addEventListener('click',homepage)
btnprojetos.addEventListener('click',mostrar1)
btncontatos.addEventListener('click',mostrar2)
btnskills.addEventListener('click',mostrar3)
btnsaibamais.addEventListener('click',mostrar)

function homepage(){
    window.location = href='index.html';
}
function mostrar(){
    window.scrollTo({
        top:800,
        behavior: 'smooth'
    })

}
function mostrar1(){
    window.scrollTo({
        top:1300,
        behavior: 'smooth'
    })
}
function mostrar2(){
    window.scrollTo({
        top:2000,
        behavior:'smooth'
    })
}

function mostrar3(){
    window.scrollTo({
        top:1200,
        behavior: 'smooth'
    })
}
//==================================================================


/*const btndownloadcv = document.getElementById('downloadcv')
btndownloadcv.addEventListener('click',baixarcv)

function baixarcv(){

}
*/