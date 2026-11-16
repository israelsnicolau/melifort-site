import "./Empresa.css";
import { Link } from "react-router-dom";

function Empresa() {
  return (
    <main className="pagina-empresa">
      <section className="empresa-banner">
        <div className="empresa-hexagonos-fundo" aria-hidden="true">
          <span className="empresa-hex-fundo empresa-hex-fundo--1"></span>
          <span className="empresa-hex-fundo empresa-hex-fundo--2"></span>
          <span className="empresa-hex-fundo empresa-hex-fundo--3"></span>
        </div>

        <div className="empresa-banner">
          <div className="empresa-container">
            <div className="empresa-banner-conteudo">
              <div className="empresa-banner-texto">
                <nav
                  className="empresa-caminho"
                  aria-label="Navegação estrutural"
                >
                  <Link to="/">Home</Link>
                  <span className="empresa-caminho-separador"> / </span>
                  <span aria-current="page">Empresa</span>
                </nav>
                <h1>Sobre Nós</h1>

                <div className="empresa-detalhe">
                  <span></span>
                  <span></span>
                </div>
              </div>

              <img
                className="empresa-banner-logo"
                src={`${import.meta.env.BASE_URL}logo_footer.webp`}
                alt="Melifort Plásticos"
              />
            </div>
          </div>
        </div>
      </section>

      <section className="empresa-institucional">
        <div className="empresa-container">
          <p className="empresa-etiqueta">MELIFORT PLÁSTICOS / INSTITUCIONAL</p>

          <h2>Fazer o simples bem feito.</h2>

          <div className="empresa-texto-original">
            <p>
              Melifort Plásticos nasceu com a vontade de fazer o simples bem
              feito! Nosso objetivo é entregar uma experiência única e agradável
              a nossos clientes.
            </p>

            <p>
              Temos a certeza de que nossos clientes serão sempre muito bem
              atendidos através de uma empresa humana e tecnológica.
            </p>

            <p>
              Na Melifort, acreditamos que as relações comerciais devem ser de
              forma agradável e eficiente são essenciais para atender as
              necessidades do mercado atual. Por isso, estamos em constante
              evolução e melhoria de nossos processos, garantindo uma
              experiência de compra ágil, flexível e única para nossos clientes.
            </p>
          </div>

          <div className="empresa-hexagonos" aria-hidden="true">
            {["azul", "laranja", "amarelo"].map((cor) => (
              <svg
                key={cor}
                className={`empresa-hexagono empresa-hexagono--${cor}`}
                viewBox="0 0 110 100"
              >
                <polygon
                  className="empresa-hexagono-base"
                  points="30,10 80,10 105,50 80,90 30,90 5,50"
                />

                <polygon
                  className="empresa-hexagono-luz"
                  points="30,10 80,10 105,50 80,90 30,90 5,50"
                />
              </svg>
            ))}
          </div>
        </div>
      </section>
    </main>
  );
}

export default Empresa;
