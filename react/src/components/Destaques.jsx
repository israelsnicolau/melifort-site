const produtos = [
  {
    id: 1,
    nome: "Cortina Bobina de PVC Standard",
    imagem: "/produtos/bobina_pvc.png",
  },

  {
    id: 2,
    nome: "Chapa de Policarbonato Alveolar",
    imagem: "/produtos/policarbonato.png",
  },

  {
    id: 3,
    nome: "Chapa de Acrílico",
    imagem: "/produtos/acrilico.png",
  },
];

function Destaques() {
  return (
    <section className="destaques">
      <div className="destaques-container">
        <div className="destaques-texto">
          <h2>DESCUBRA O QUE HÁ DE MELHOR!</h2>
          <p>
            Explore o melhor em materiais plásticos para seu negócio ou
            residência com a Melifort!
            <br />
            Nosso diferencial está em oferecer soluções ágeis e de qualidade,
            sempre com um atendimento personalizado e humano.
            <br />
            Conte conosco para encontrar o que você precisa, com entrega rápida
            e eficiente. Vamos tornar sua busca por plásticos uma experiência
            agradável e descomplicada!
          </p>

          <a href="/produtos" className="btn-destaques">
            VEJA MAIS PRODUTOS
          </a>
        </div>

        <div className="destaques-produtos">
          {produtos.map((produto) => (
            <div className="produto-card" key={produto.id}>
              <div className="produto-imagem">
                <img src={produto.imagem} alt={produto.nome} />
              </div>
              <h3>{produto.nome}</h3>{" "}
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}

export default Destaques;
