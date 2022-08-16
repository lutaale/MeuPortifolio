function slide1() {
    document.getElementById('projetosimg2').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg3').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg4').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg5').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg6').setAttribute('style', 'opacity:0;pointer-events: none')

    setTimeout(() => {
        slide2()
    }, 4000);
}

function slide2() {
    document.getElementById('projetosimg2').setAttribute('style', 'opacity:1;pointer-events: auto')
    document.getElementById('projetosimg1').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg3').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg4').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg5').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg6').setAttribute('style', 'opacity:0;pointer-events: none')
    setTimeout(() => {
        slide3()
    }, 4000);
}

function slide3() {
    document.getElementById('projetosimg3').setAttribute('style', 'opacity:1;pointer-events: auto')
    document.getElementById('projetosimg1').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg2').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg4').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg5').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg6').setAttribute('style', 'opacity:0;pointer-events: none')
    setTimeout(() => {
        slide4()
    }, 4000);
}

function slide4() {
    document.getElementById('projetosimg4').setAttribute('style', 'opacity:1;pointer-events: auto')
    document.getElementById('projetosimg3').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg1').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg2').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg5').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg6').setAttribute('style', 'opacity:0;pointer-events: none')
    setTimeout(() => {
        slide5()
    }, 4000);
}

function slide5() {
    document.getElementById('projetosimg5').setAttribute('style', 'opacity:1;pointer-events: auto')
    document.getElementById('projetosimg4').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg3').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg2').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg1').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg6').setAttribute('style', 'opacity:0;pointer-events: none')
    setTimeout(() => {
        slide6()
    }, 4000);

}
function slide6() {
    document.getElementById('projetosimg6').setAttribute('style', 'opacity:1;pointer-events: auto')
    document.getElementById('projetosimg5').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg4').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg3').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg2').setAttribute('style', 'opacity:0;pointer-events: none')
    document.getElementById('projetosimg1').setAttribute('style', 'opacity:0;pointer-events: none')
    setTimeout(() => {
        slide1()
    }, 4000);
}