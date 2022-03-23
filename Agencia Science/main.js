

const servicosbtn = document.querySelector('.servicosbtn')
servicosbtn.addEventListener('click', scrollfunc)

const telafull = window.screen.width

function scrollfunc() {
    if (telafull > 415) {
        window.scrollTo({
            top: 700,
            behavior: 'smooth'
        })
    } else if (telafull < 500) {
        window.scrollTo({
            top: 700,
            behavior: 'smooth'
        })
    }
}

const btnservicos2 = document.querySelector('.servicos2')

btnservicos2.addEventListener('click', scrollorcamento2)
function scrollorcamento2() {
    if (telafull > 415) {
        window.scrollTo({
            top: 700,
            behavior: 'smooth'
        })
    } else if (telafull < 500) {
        window.scrollTo({
            top: 700,
            behavior: 'smooth'
        })
    }
}
const orcamento2 = document.querySelector('.orcamento2')

orcamento2.addEventListener('click', scrollorcamento3)
function scrollorcamento3() {
    window.scrollTo({
        top: 0,
        behavior:'smooth'
    })
    box1.classList.add('activeform')
}

const homebtn = document.querySelector('.home')
const homebtn2 = document.querySelector('.home2')
homebtn2.addEventListener('click', homepage)

homebtn.addEventListener('click', homepage)

function homepage() {
    document.location = herf = 'agenciascience.php'
}
const btnsoliorcamento = document.querySelector('.soliorcamento')

btnsoliorcamento.addEventListener('click', scrollorcamento)

function scrollorcamento() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
    box1.classList.add('activeform')
}
const box1 = document.querySelector('.formulario')

const btnblog = document.querySelector('.blog');

btnblog.addEventListener('click', blog)
function blog() {
    document.location = href = ''
}




