import { BrowserRouter, Route, Routes } from "react-router-dom";

import Home from './Pages/Home'
import Filme from './Pages/Filme'
import Header from './components/Header'
import Favoritos from "./Pages/Favoritos";

function RoutesApp() {
    return (
        <BrowserRouter>
            <Header></Header>
            <Routes>
                <Route path="/" element={<Home></Home>}></Route>
                <Route path='/Filme/:id' element={<Filme></Filme>}></Route>
                <Route path='/Favoritos/' element={<Favoritos></Favoritos>}></Route>
            </Routes>
        </BrowserRouter>
    )
}
export default RoutesApp;