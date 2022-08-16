const btnvoltar = document.getElementById('voltar')

btnvoltar.addEventListener('click', voltar)
let visibilidade2 = true
function voltar() {
    document.querySelector('.saindo').setAttribute('style', 'display:flex;justify-content:center;align-items:center')
    setTimeout(() => {
        window.location = href = '../index.html'
    }, 2500);
}


const btnmenu = document.getElementById('menubtns')

let visibilidade = true //variavel para servir como um "interruptor" liga-desliga 

btnmenu.addEventListener('click', showmenuescondermenu)
function showmenuescondermenu() {
    if (visibilidade) {
        document.getElementById('navbtns').setAttribute('style', 'display:none;')
        visibilidade = false
    } else {
        document.getElementById('navbtns').setAttribute('style', 'display:flex')
        visibilidade = true
    }

}