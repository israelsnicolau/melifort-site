import { Phone, Mail, Clock3, ShieldCheck } from "lucide-react";
import { FaWhatsapp } from "react-icons/fa";
import "./Footer.css";

function Footer() {
  return (
    <footer className="footer">
      <div className="footer-container">
        <div className="footer-conteudo">
          {/* Logo */}
          <div className="footer-coluna footer-marca">
            <img
              src={`${import.meta.env.BASE_URL}logo_footer.png`}
              alt="Melifort Plásticos"
              className="footer-logo"
            />
          </div>

          <nav className="footer-coluna" aria-label="Navegação do rodapé">
            <h3>Institucional</h3>

            <a href={`${import.meta.env.BASE_URL}`}>Home</a>
            <a href="#produtos">Produtos</a>
            <a href="#segmentos">Informações</a>
            <a href="#sobre">Sobre a Melifort</a>
            <a href="mailto:contato@melifort.com.br">Contato</a>
          </nav>

          <div className="footer-coluna">
            <h3>Contato</h3>

            <a href="mailto:contato@melifort.com.br" className="footer-info">
              <Mail size={17} />
              <span>contato@melifort.com.br</span>
            </a>

            <a href="tel:+551120847726" className="footer-info">
              <Phone size={17} />
              <span>(11) 2084-7726</span>
            </a>

            <a
              href="https://wa.me/5511937387748"
              target="_blank"
              rel="noopener noreferrer"
              className="footer-info"
            >
              <FaWhatsapp size={17} />
              <span>(11) 93738-7748</span>
            </a>
          </div>

          <div className="footer-coluna">
            <h3>Atendimento</h3>

            <div className="footer-info">
              <Clock3 size={17} />
              <span>Segunda a sexta: 08h às 18h</span>
            </div>

            <div className="footer-info">
              <Clock3 size={17} />
              <span>Sábado: 08h às 12h</span>
            </div>
          </div>
        </div>

        <div className="footer-seguranca">
          <a
            href="https://transparencyreport.google.com/safe-browsing/search?url=melifort.com.br"
            target="_blank"
            rel="noopener noreferrer"
            className="footer-seguranca-link"
          >
            <ShieldCheck size={22} strokeWidth={1.8} />

            <span>
              <strong>Segurança do site</strong>
              <small>Consultar no Google Safe Browsing</small>
            </span>
          </a>
        </div>

        <div className="footer-empresa">
          <p>
            <strong>Melifort Comércio e Distribuição de Plásticos Ltda.</strong>
          </p>

          <p>CNPJ: 32.400.272/0001-75</p>

          <p>
            Rua Padre João Álvares, 667 — Vila Renata, Guarulhos — SP, CEP
            07056-000
          </p>
        </div>

        <div className="footer-inferior">
          <p className="footer-creditos">
            © {new Date().getFullYear()} Melifort. Desenvolvido por{" "}
            <a
              href="https://corexbr.com.br"
              target="_blank"
              rel="noopener noreferrer"
            >
              Corex Tecnologia
            </a>
          </p>
        </div>
      </div>
    </footer>
  );
}

export default Footer;
