import "./Segmentos.css";

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
  return (
    <section className="segmentos">
      <div className="segmentos-container">
        <h2>Segmentos</h2>

        <div className="segmentos-accordion">
          {segmentos.map((segmento) => (
            <a
              className="segmento"
              key={segmento.nome}
              href={`${import.meta.env.BASE_URL}${segmento.link}`}
              style={{
                backgroundImage: `linear-gradient(
                  to top,
                  rgba(0, 0, 0, 0.85),
                  rgba(0, 0, 0, 0.05)
                ), url("${import.meta.env.BASE_URL}segmentos/${segmento.imagem}")`,
              }}
            >
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
