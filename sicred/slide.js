const tela = window.screen.width

if (tela <= 428) {
    document.getElementById('slide').setAttribute('style', 'display:none')
} else {
    function slide1() {
        document.getElementById('img1').setAttribute('style', 'opacity:0')
        document.getElementById('img2').setAttribute('style', 'opacity:0')
        setTimeout(() => {
            slide2()
        }, 2000);
    }
    
    function slide2() {
        document.getElementById('img1').setAttribute('style', 'opacity:1')
        document.getElementById('img2').setAttribute('style', 'opacity:0')
    
        setTimeout(() => {
            slide3()
        }, 2000);
    }
    
    function slide3() {
        document.getElementById('img1').setAttribute('style', 'opacity:0')
        document.getElementById('img2').setAttribute('style', 'opacity:1')
        setTimeout(() => {
            slide1()
        }, 2000);
    }
    
}
