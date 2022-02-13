// Teste pagina de login
// dev Alexandre de oliveira luta
//11/02/2022

import './App.css';

function App(){
  return (
    <body>
      <div className="box">
        <div className="logo">
          <img src={"https://www.xtrategie.com.br/wp-content/uploads/2019/08/logo_xtrategie.png"} />
        </div>
        <div className="linha"></div>
        <div className="containerlogin">
          <h1>Faça seu login</h1>
          <form>
            <div className="inputs">
              <div className="display">
                <input placeholder="E-mail" type="email" name="email" id="email" requerid />
              </div><br></br>
              <div className="display">
                <input placeholder="Senha" type="password" name="password" id="password" requerid />
              </div>
            </div>
            <div className="btn">
              <button  name="btn" id="btn">ENTRAR</button>
            </div>
          </form>
        </div>
      </div>
      <div className="cop">
        <img src={"https://img.icons8.com/material-outlined/50/000000/copyright.png"} />
        <label>Softwere Powered by xtrategie</label><br></br>
        <p>2009-2021</p>
      </div>
    </body>
  );
}

export default App;
