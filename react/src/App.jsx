import "./App.css";
import { HashRouter, Routes, Route } from "react-router-dom";
import { CarrinhoProvider } from "./context/CarrinhoContext.jsx";

import LayoutPublico from "./components/LayoutPublico.jsx";
import Home from "./pages/Home.jsx";
import Empresa from "./pages/Empresa.jsx";
import Produtos from "./pages/Produtos.jsx";
import PaginaProdutos from "./pages/PaginaProdutos.jsx";
import Carrinho from "./pages/Carrinho.jsx";

import AdminLayout, { ROTA_GESTAO } from "./admin/components/AdminLayout.jsx";

import Dashboard from "./admin/pages/Dashboard.jsx";
import GerenciarProdutos from "./admin/pages/GerenciarPordutos.jsx";

function App() {
  return (
    <CarrinhoProvider>
      <HashRouter>
        <Routes>
          <Route element={<LayoutPublico />}>
            <Route path="/" element={<Home />} />
            <Route path="/empresa" element={<Empresa />} />
            <Route path="/produtos" element={<Produtos />} />
            <Route path="/produtos/:id" element={<PaginaProdutos />} />
            <Route path="/cotacao" element={<Carrinho />} />
          </Route>

          <Route path={ROTA_GESTAO} element={<AdminLayout />}>
            <Route index element={<Dashboard />} />
            <Route path="produtos" element={<GerenciarProdutos />}></Route>
          </Route>
        </Routes>
      </HashRouter>
    </CarrinhoProvider>
  );
}

export default App;
