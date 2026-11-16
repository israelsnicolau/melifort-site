import { Phone, Search, Mail, Menu, X } from "lucide-react";
import { useState } from "react";
import { Link } from "react-router-dom";
import { FaWhatsapp } from "react-icons/fa";
import "./Header.css";

function Header() {
  const [menuAberto, setMenuAberto] = useState(false);

  const fecharMenu = () => setMenuAberto(false);

  return (
    <header
      className={`topo header-layout ${menuAberto ? "header-menu-aberto" : ""}`}
    >
      <div className="topo-faixa">
        <div className="contatos">
          <a href="tel:551120847726">
            <Phone size={18} /> (11) 2084-7726
          </a>

          <span className="separador-contato">|</span>

          <a
            href="https://wa.me/5511937387748"
            target="_blank"
            rel="noopener noreferrer"
          >
            <FaWhatsapp size={18} /> (11) 93738-7748
          </a>

          <span className="separador-contato">|</span>

          <a href="mailto:contato@melifort.com.br">
            <Mail size={18} />
            contato@melifort.com.br
          </a>
        </div>

        <form
          className="form-busca"
          onSubmit={(event) => event.preventDefault()}
        >
          <div className="busca-hexagono">
            <input
              className="campo-busca"
              type="search"
              placeholder="Pesquisar produtos..."
            />
          </div>

          <button
            aria-label="Buscar produtos"
            className="btn-buscar"
            type="submit"
          >
            <Search size={20} strokeWidth={2.5} />
          </button>
        </form>

        <div className="acoes-topo">
          <Link to="/contato" className="btn-contato" onClick={fecharMenu}>
            <span>Contato</span>
          </Link>

          <button type="button" className="btn-catalogo">
            <span>Catálogo</span>
          </button>
        </div>
      </div>

      <div className="topo-principal">
        <Link to="/" className="logo-header" onClick={fecharMenu}>
          <img
            src={`${import.meta.env.BASE_URL}logo.webp`}
            alt="Melifort"
            width="150"
            height="67"
          />
        </Link>

        <button
          type="button"
          className="menu-mobile-botao"
          aria-label={menuAberto ? "Fechar menu" : "Abrir menu"}
          aria-expanded={menuAberto}
          aria-controls="menu-navegacao"
          onClick={() => setMenuAberto(!menuAberto)}
        >
          {menuAberto ? <X size={28} /> : <Menu size={28} />}
        </button>

        <nav
          id="menu-navegacao"
          className={`menu-principal ${menuAberto ? "menu-aberto" : ""}`}
        >
          <Link to="/" onClick={fecharMenu}>
            Home
          </Link>

          <Link to="/empresa" onClick={fecharMenu}>
            Empresa
          </Link>

          <Link to="/produtos" onClick={fecharMenu}>
            Produtos
          </Link>

          <Link to="/servicos" onClick={fecharMenu}>
            Serviços
          </Link>

          <Link to="/cotacao" onClick={fecharMenu}>
            Cotação Online
          </Link>

          <Link to="/programa-de-fidelidade" onClick={fecharMenu}>
            Programa de Fidelidade
          </Link>

          <Link to="/#segmentos" onClick={fecharMenu}>
            Segmentos
          </Link>

          <Link to="/contato" onClick={fecharMenu}>
            Contato
          </Link>
        </nav>
      </div>
    </header>
  );
}

export default Header;
