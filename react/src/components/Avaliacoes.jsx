import { useEffect, useRef, useState } from "react";
import "./Avaliacoes.css";
import ImagemOtimizada from "./ImagemOtimizada.jsx";

const avaliacoes = [
  {
    nome: "Paulo Sergio Martins",
    texto:
      "Atendimento e produto muito bons. A entrega foi rápida. Preço bem abaixo da minha região. Gostei e recomendo!",
    estrelas: 5,
    foto: "paulo.png",
  },
  {
    nome: "Gislene Alves",
    texto:
      "Atendimento TOP feito por Sr. Rene, atencioso desde a apresentação do produto, dicas de instalação, desconto e ainda nos entregou na minha casa no mesmo dia. Material ótimo. Recomendo.",
    estrelas: 5,
    foto: "gislene.png",
  },
  {
    nome: "Alexandre Vieira",
    texto:
      "Atendimento impecável, rápido e entrega foi realizada muito rapidamente. Grato pelo atendimento.",
    estrelas: 5,
    foto: "alexandre.png",
  },
];

function Avaliacoes() {
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
      className={`avaliacoes ${visivel ? "avaliacoes-visivel" : ""}`}
    >
      <div className="avaliacoes-container">
        <h2>O que nossos clientes dizem</h2>
        <p>Conheça a experiência de nossos clientes.</p>

        <div className="avaliacoes-grid">
          {avaliacoes.map((avaliacao) => (
            <article className="avaliacao-card" key={avaliacao.nome}>
              <div
                className="avaliacao-estrelas"
                aria-label={`${avaliacao.estrelas} de 5 estrelas`}
              >
                <span aria-hidden="true">{"★".repeat(avaliacao.estrelas)}</span>
              </div>

              <p className="avaliacao-texto">“{avaliacao.texto}”</p>

              <div className="avaliacao-cliente">
                <div className="avaliacao-foto">
                  <div className="avaliacao-foto-interna">
                    {avaliacao.foto ? (
                      <ImagemOtimizada
                        src={`${import.meta.env.BASE_URL}avaliacoes/${avaliacao.foto}`}
                        alt={`Foto de ${avaliacao.nome}`}
                      />
                    ) : (
                      avaliacao.nome
                        .split(" ")
                        .slice(0, 2)
                        .map((parte) => parte[0])
                        .join("")
                    )}
                  </div>
                </div>

                <div className="avaliacao-dados">
                  <h3>{avaliacao.nome}</h3>
                  <span>Cliente Melifort</span>
                </div>
              </div>
            </article>
          ))}
        </div>
      </div>
    </section>
  );
}

export default Avaliacoes;
