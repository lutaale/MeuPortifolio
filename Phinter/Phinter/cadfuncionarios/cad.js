const btnvoltar = document.getElementById('back')

btnvoltar.addEventListener('click', voltarlogin)

function voltarlogin() {
    window.location = href = '../index.html'
}

const btnsalvar = document.getElementById('enviardados')

btnsalvar.addEventListener('click', salvardados)

/*
funçao para guardar os dados
*/
function salvardados() {
    var camponome = document.getElementById('nome')
    var campoemail = document.getElementById('email')
    var camposenha = document.getElementById('senha')
    var confirmesenha = document.getElementById('senha2')

    var dados = JSON.parse(localStorage.getItem("usuario"))

    if (dados == null) {
        localStorage.setItem("usuario", "[]")
        dados = []
    }
    var dadosusuario = {
        nome: camponome.value,
        email: campoemail.value,
        senha: camposenha.value,
    }
    dados.push(dadosusuario)

    localStorage.setItem("usuario", JSON.stringify(dados));
    camponome = document.getElementById('nome').value = ""
    campoemail = document.getElementById('email').value = ""
    camposenha = document.getElementById('senha').value = ""
    confirmesenha = document.getElementById('senha2').value = ""

    window.location = href = '../index.html'
}



//função para fazer a autenticaçao od usuario
function entrar() {
    document.querySelector('.load').setAttribute('style', 'display:block')

    let campoemail = document.getElementById('email')
    let camposenha = document.getElementById('senha')
    let inputs = document.querySelector('.inputs')
    let input2 = document.getElementById('input2')
    let span = document.querySelector('.span')
    let span2 = document.querySelector('.span2')
    let msgerro = document.getElementById('msgerro')
    let msgvalid = document.getElementById('msgvalid')
    let divnome = document.getElementById('nomediv')


    let uservalid = {
        nome: '',
        email: 'false',
        senha: ''
    }

    //listauser recebe o campo usuario que armazena os dados 
    //pegamos o  campo que esta em modo string,e convertemos para objeto atraves do json.parse para podemos receber os dados em
    //forma de objeto novamente e poder acessa - los para fazer a verificação de autenticação
    listauser = JSON.parse(localStorage.getItem('usuario'))

    //usando o foreach para percorrer o campo dos dados para saber se o que o usuario digitou tem armazenado
    //se tiver ele preenche o objeto uservalid com os dados assim podendo acessalos para fazer a verificação
    listauser.forEach((item) => {
        if (campoemail.value == item.email && camposenha.value == item.senha) {
            uservalid = {
                nome: item.nome,
                email: item.email,
                senha: item.senha
            }
        }
    })
    //se o campo de login estiver vazio entao nao sai da pagina de login
    if (campoemail.value == uservalid.email && camposenha.value == uservalid.senha) {
        msgvalid.setAttribute('style', 'display:block')
        divnome.innerHTML = 'seja bem vindo ' + uservalid.nome
        msgerro.setAttribute('style', 'display:none')
        inputs.setAttribute('style', 'border-color:grey')
        span.setAttribute('style', 'color:grey')
        input2.setAttribute('style', 'border-color:grey')
        span2.setAttribute('style', 'color:grey')

        setTimeout(() => {
            window.location = href = './painel/painel.html'
        }, 3000)
    } else if (campoemail.value == '' && camposenha.value == '' || campoemail.value != uservalid.email && camposenha.value != uservalid.senha) {
        document.querySelector('.load').setAttribute('style', 'display:none')
        msgerro.setAttribute('style', 'display:block;transition: 0.5s ease;font-size:13px;position:absolute')
        inputs.setAttribute('style', 'border-color:red')
        span.setAttribute('style', 'color:red')
        input2.setAttribute('style', 'border-color:red')
        span2.setAttribute('style', 'color:red')
    }
}