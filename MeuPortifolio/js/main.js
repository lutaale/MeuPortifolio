 
    document.getElementById('box1').setAttribute('style','display:none')
    document.getElementById('box2').setAttribute('style','display:none')
    document.getElementById('box3').setAttribute('style','display:none')
    document.getElementById('formulario').setAttribute('style','display:none')
    document.getElementById('footer').setAttribute('style','display:none')
setTimeout(() => {
    document.getElementById('box1').setAttribute('style','display:block')
    document.getElementById('box2').setAttribute('style','display:block')
    document.getElementById('box3').setAttribute('style','display:block')
    document.getElementById('formulario').setAttribute('style','display:flex')
    document.getElementById('footer').setAttribute('style','display:flex')
    document.getElementById('indexloading').setAttribute('style','display:none')

}, 4000);

 
