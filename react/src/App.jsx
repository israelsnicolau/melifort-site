import "./App.css";
import { HashRouter, Routes, Route } from "react-router-dom";

import Header from "./components/Header.jsx";
import Footer from "./components/Footer.jsx";
import WhatsappFlutuante from "./components/WhatsappFlutuante.jsx";

import Home from "./pages/Home.jsx";
import Empresa from "./pages/Empresa.jsx";

function App() {
  return (
    <HashRouter>
      <Header />

      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/empresa" element={<Empresa />} />
      </Routes>

      <Footer />
      <WhatsappFlutuante />
    </HashRouter>
  );
}

export default App;
