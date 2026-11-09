import "./Avaliacoes.css";

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
  console.log(avaliacoes);

  return (
    <section className="avaliacoes">
      <div className="avaliacoes-container">
        <h2>O que nossos clientes dizem</h2>
        <p>Conheça a experiência de nossos clientes.</p>

        <div className="avaliacoes-grid">
          {avaliacoes.map((avaliacao) => (
            <article className="avaliacao-card" key={avaliacao.nome}>
              <div className="avaliacao-estrelas">
                {"★".repeat(avaliacao.estrelas)}
              </div>

              <p className="avaliacao-texto">“{avaliacao.texto}”</p>

              <div className="avaliacao-cliente">
                <div className="avaliacao-foto">
                  <div className="avaliacao-foto-interna">
                    {avaliacao.foto ? (
                      <img
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
