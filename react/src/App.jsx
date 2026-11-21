import "./App.css";
import { HashRouter, Routes, Route } from "react-router-dom";
import { CarrinhoProvider } from "./context/CarrinhoContext.jsx";

import Header from "./components/Header.jsx";
import Footer from "./components/Footer.jsx";
import WhatsappFlutuante from "./components/WhatsappFlutuante.jsx";
import CarrinhoFlutuante from "./components/CarrinhoFlutuante.jsx";
import Produtos from "./pages/Produtos.jsx";

import Home from "./pages/Home.jsx";
import Empresa from "./pages/Empresa.jsx";

function App() {
  return (
    <CarrinhoProvider>
      <HashRouter>
        <Header />

        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/empresa" element={<Empresa />} />
          <Route path="/produtos" element={<Produtos />} />
        </Routes>

        <Footer />
        <WhatsappFlutuante />
        <CarrinhoFlutuante />
      </HashRouter>
    </CarrinhoProvider>
  );
}

export default App;
