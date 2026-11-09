import "./Sobre.css";

function Sobre() {
  return (
    <section className="sobre" id="sobre">
      <div className="sobre-container">
        <div className="sobre-identidade">
          <img
            src={`${import.meta.env.BASE_URL}logo.png`}
            alt="Melifort Plásticos"
            className="sobre-logo"
          />
        </div>

        <div className="sobre-conteudo">
          <span className="sobre-etiqueta">QUEM SOMOS</span>

          <h2>MELIFORT | PLÁSTICOS</h2>

          <p>
            Em um mundo em constante evolução, a Melifort se destaca por sua
            abordagem moderna e ágil. Nosso compromisso com a inovação nos
            permite proporcionar uma experiência incrível aos nossos clientes.
            Trabalhamos de forma eficiente para garantir que nossos produtos
            sejam distribuídos de forma rápida e segura, atendendo a diversos
            setores como mercados, açougues, frigoríficos, indústrias,
            residências e empresas de comunicação visual. Com um atendimento que
            se adapta às necessidades do cliente, estamos prontos para
            enfrentars os desafios do mercado moderno e entregar soluções ideais
            que fazem a diferença.
          </p>

          <a href={`${import.meta.env.BASE_URL}empresa`} className="btn-sobre">
            Acesse nosso catálogo
            <span aria-hidden="true">↗</span>
          </a>
        </div>
      </div>
    </section>
  );
}

export default Sobre;
