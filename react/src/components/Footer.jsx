import { Phone, Mail, Clock3, ShieldCheck } from "lucide-react";
import {
  FaWhatsapp,
  FaInstagram,
  FaFacebookF,
  FaLinkedinIn,
  FaTelegramPlane,
} from "react-icons/fa";
import { Link } from "react-router-dom";
import ImagemOtimizada from "./ImagemOtimizada";
import "./Footer.css";

const redesSociais = [
  {
    nome: "Instagram",
    url: "https://www.instagram.com/melifortplasticos/?__pwa=1",
    Icone: FaInstagram,
  },
  {
    nome: "Facebook",
    url: "https://www.facebook.com/p/Melifort-Com%C3%A9rcio-e-Distribui%C3%A7%C3%A3o-de-Pl%C3%A1sticos-61556387811162/",
    Icone: FaFacebookF,
  },
  {
    nome: "LinkedIn",
    url: "https://www.linkedin.com/company/melifort",
    Icone: FaLinkedinIn,
  },
  {
    nome: "Telegram",
    url: "https://t.me/Melifort_brasil",
    Icone: FaTelegramPlane,
  },
];

function Footer() {
  return (
    <footer className="footer">
      <div className="footer-container">
        <div className="footer-conteudo">
          <div className="footer-coluna footer-marca">
            <ImagemOtimizada
              src={`${import.meta.env.BASE_URL}logo_footer.webp`}
              alt="Melifort Plásticos"
              className="footer-logo"
            />

            <div className="footer-redes">
              <span className="footer-redes-titulo">Siga a Melifort</span>

              <div className="footer-redes-icones">
                {redesSociais.map(({ nome, url, Icone }) => (
                  <a
                    key={nome}
                    href={url}
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label={`Melifort no ${nome}`}
                    title={nome}
                  >
                    <Icone aria-hidden="true" />
                  </a>
                ))}
              </div>
            </div>
          </div>

          <nav className="footer-coluna" aria-label="Navegação do rodapé">
            <h3>Institucional</h3>

            <Link to="/">Home</Link>
            <Link to="/#produtos">Produtos</Link>
            <Link to="/#segmentos">Informações</Link>
            <Link to="/empresa">Sobre a Melifort</Link>
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
