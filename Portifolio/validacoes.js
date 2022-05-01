const btnenviar = document.getElementById('enviar')
var inputemail = document.getElementById('email')
var inputtel = document.getElementById('tel')
var inputmensagem = document.getElementById('mensagem')

btnenviar.addEventListener('click', verificacao)
function verificacao() {
    if (inputemail.value == "" || inputtel.value == "" || inputmensagem.value == "") {
        document.querySelector(".inputs").setAttribute('style', 'border-color:red')
        document.getElementById("inputs2").setAttribute('style', 'border-color:red')
    }
}

function hiddenverificacao() {
    document.querySelector(".inputs").setAttribute('style', 'border-color:#C55A11')
    document.getElementById("inputs2").setAttribute('style', 'border-color:#C55A11')

}