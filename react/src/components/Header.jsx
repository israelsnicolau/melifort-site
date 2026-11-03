import { Phone, Search, Mail } from "lucide-react";
import { FaWhatsapp } from "react-icons/fa";

//CABECALHO
function Header() {
  return (
    <header className="topo">
      {/*BARRA SUPERIOR*/}
      <div className="topo-faixa">
        {/*CONTATOS*/}
        <div className="contatos">
          <a href="tel:551120847726">
            {" "}
            <Phone size={18} /> (11) 2084-7726
          </a>
          <a>|</a>
          <a
            href="https://wa.me/5511937387748"
            target="_blank"
            rel="noopener noreferrer"
          >
            <FaWhatsapp size={18} /> (11) 93738-7748
          </a>
          <a>|</a>
          {/*EMAIL*/}
          <a href="mailto:contato@melifort.com.br">
            <Mail size={18} />
            contato@melifort.com.br
          </a>
        </div>

        {/*PESQUISA*/}
        <form className="form-busca">
          <div className="busca-hexagono">
            <input
              className="campo-busca"
              type="search"
              placeholder="Pesquisar produtos..."
            />{" "}
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
          {/*CONTATO*/}
          <a href="/contato" className="btn-contato">
            <span>Contato</span>
          </a>

          {/*CATALOGO*/}
          <button type="button" className="btn-catalogo">
            <span>Catálogo</span>
          </button>
        </div>
      </div>

      {/*MENU*/}
      <div className="topo-principal">
        <a href="/">
          <img src="/logo.png" alt="Melifort" />
        </a>
        <nav className="menu-principal">
          <a href="/">Home</a>
          <a href="/empresa">Empresa</a>
          <a href="/produtos">Produtos</a>
          <a href="/servicos">Serviços</a>
          <a href="/cotacao>">Cotação Online</a>
          <a href="programa-de-fidelidade">Programa de Fidelidade</a>
          <a href="/#segmentos">Segmentos</a>
          <a href="/contato">Contato</a>
        </nav>
      </div>
    </header>
  );
}

export default Header;
