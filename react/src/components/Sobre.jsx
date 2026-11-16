import { useEffect, useRef, useState } from "react";
import "./Sobre.css";
import ImagemOtimizada from "./ImagemOtimizada.jsx";

function Sobre() {
  const secaoRef = useRef(null);
  const [visivel, setVisivel] = useState(false);

  useEffect(() => {
    const secao = secaoRef.current;

    if (!secao) return;

    if (!("IntersectionObserver" in window)) {
      setVisivel(true);
      return;
    }

    const observer = new IntersectionObserver(
      ([entrada]) => {
        if (entrada.isIntersecting) {
          setVisivel(true);
          observer.disconnect();
        }
      },
      {
        threshold: 0.1,
        rootMargin: "0px 0px -30px 0px",
      },
    );

    observer.observe(secao);

    return () => observer.disconnect();
  }, []);

  return (
    <section
      ref={secaoRef}
      className={`sobre ${visivel ? "sobre-visivel" : ""}`}
      id="sobre"
    >
      <div className="sobre-container">
        <div className="sobre-identidade">
          <ImagemOtimizada
            src={`${import.meta.env.BASE_URL}logo.webp`}
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
            se adapta às necessidades do cliente, estamos prontos para enfrentar
            os desafios do mercado moderno e entregar soluções ideais que fazem
            a diferença.
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
