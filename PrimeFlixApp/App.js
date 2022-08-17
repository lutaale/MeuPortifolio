import React from "react";
import './App.css'
import RoutesApp from './router'
import {ToastContainer} from 'react-toastify'
import 'react-toastify/dist/ReactToastify.css'


function App() {
  return (
    <div className="container">
      <ToastContainer autoClose={3000}></ToastContainer>
      <RoutesApp></RoutesApp>
    </div>
  )
}

export default App;