import { BrowserRouter, Route, Routes } from "react-router-dom";

import Home from './Pages/Home'
import Cadastro from './Pages/Cadastro'
import Erro from './Pages/Err'


function RoutesApp() {
    return (
        <BrowserRouter>
            <Routes>
                <Route path="/" element={<Home></Home>}></Route>
                <Route path="/Cadastro" element={<Cadastro></Cadastro>}></Route>
       
                
                <Route path="*" element={<Erro></Erro>}></Route>
            </Routes>
        </BrowserRouter>
    )
}
export default RoutesApp;

// o asteristico serve para identificar a pagina de erro automaticamente