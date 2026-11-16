import { useEffect, useRef, useState } from "react";
import "./Segmentos.css";
import ImagemOtimizada from "./ImagemOtimizada";

const segmentos = [
  {
    nome: "Mercados, Frigoríficos e Açougues",
    imagem: "acougue.png",
    link: "mercados-frigorificos-acougues",
  },
  {
    nome: "Comunicação Visual",
    imagem: "comunicacao_visual.png",
    link: "comunicacao-visual",
  },
  {
    nome: "Indústrias",
    imagem: "industrias.png",
    link: "industrias",
  },
  {
    nome: "Bares e Restaurantes",
    imagem: "bares_restaurantes.png",
    link: "bares-restaurante",
  },
  {
    nome: "Toldos e Coberturas",
    imagem: "toldos.png",
    link: "toldos-coberturas",
  },
  {
    nome: "Residencial",
    imagem: "residencial.png",
    link: "residencial",
  },
];

function Segmentos() {
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
      className={`segmentos ${visivel ? "segmentos-visivel" : ""}`}
    >
      <div className="segmentos-container">
        <h2>Segmentos</h2>

        <div className="segmentos-accordion">
          {segmentos.map((segmento) => (
            <a
              className="segmento"
              key={segmento.nome}
              href={`${import.meta.env.BASE_URL}${segmento.link}`}
            >
              <ImagemOtimizada
                className="segmento-imagem"
                src={`${import.meta.env.BASE_URL}segmentos-webp/${segmento.imagem.replace(/\.(png|jpe?g)$/i, ".webp")}`}
                alt={`Aplicações de plásticos no segmento de ${segmento.nome}`}
              />

              <div className="segmento-conteudo">
                <div className="segmento-textos">
                  <h3>{segmento.nome}</h3>
                  <span className="segmento-explorar">Explorar segmento</span>
                </div>

                <span className="segmento-seta" aria-hidden="true">
                  ↗
                </span>
              </div>
            </a>
          ))}
        </div>
      </div>
    </section>
  );
}

export default Segmentos;
