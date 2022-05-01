
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

let escondermenu = true

btnmenu.addEventListener('click', showmenu)
function showmenu() {
    if (escondermenu) {
        document.getElementById('btnarea').setAttribute('style', 'visibility:hidden')
        escondermenu = false
    } else {
        document.getElementById('btnarea').setAttribute('style', 'visibility:visible')
        escondermenu = true
    }
}
