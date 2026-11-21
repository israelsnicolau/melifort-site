import { useState } from "react";
import { Link } from "react-router-dom";
import ModalProduto from "../components/ModalProduto.jsx";
import "./Produtos.css";

const produtosModelo = [
  {
    id: 1,
    nome: "Policarbonato",
    imagem: "/produtos-webp/policarbonato.webp",
    cor: "azul",
    corMoldura: "#f58220",
    categoria: "Chapas plásticas",
    descricao:
      "Material resistente e versátil, indicado para aplicações industriais e projetos personalizados.",
    tamanhos: ["1000 x 2000 mm", "1220 x 2440 mm"],
    cores: ["Cristal", "Branco", "Fumê"],
    aplicacoes: ["Proteções industriais", "Coberturas", "Comunicação visual"],
    especificacoes: [
      ["Material", "Policarbonato"],
      ["Formato", "Chapa"],
    ],
  },
  {
    id: 2,
    nome: "Bobina de PVC",
    imagem: "produtos-webp/bobina_pvc.webp",
    cor: "laranja",
    corMoldura: "#f58220",
    categoria: "Materiais flexíveis",
    descricao:
      "Material flexível para diferentes aplicações industriais e comerciais.",
    tamanhos: ["1,00 m", "1,20 m", "1,40 m"],
    cores: ["Cristal", "Translúcido"],
    aplicacoes: [
      "Cortinas industriais",
      "Proteção de superfícies",
      "Revestimentos",
    ],
    especificacoes: [
      ["Material", "PVC"],
      ["Formato", "Bobina"],
    ],
  },
  {
    id: 3,
    nome: "Chapa de Acrílico",
    imagem: "produtos-webp/acrilico.webp",
    cor: "amarelo",
    corMoldura: "#f58220",
    categoria: "Chapas plásticas",
    descricao:
      "Material versátil, indicado para comunicação visual, displays e projetos personalizados.",
    tamanhos: ["1000 x 2000 mm", "1220 x 2440 mm"],
    cores: ["Cristal", "Branco", "Preto"],
    aplicacoes: ["Displays", "Expositores", "Comunicação visual"],
    especificacoes: [
      ["Material", "Acrílico"],
      ["Formato", "Chapa"],
    ],
  },
  {
    id: 4,
    nome: "TESTE",
    imagem: "logo.webp",
    cor: "amarelo",
    corMoldura: "#f58220",
    categoria: "Chapas plásticas",
    descricao:
      "Material versátil, indicado para comunicação visual, displays e projetos personalizados.",
    tamanhos: ["1000 x 2000 mm", "1220 x 2440 mm"],
    cores: ["Cristal", "Branco", "Preto"],
    aplicacoes: ["Displays", "Expositores", "Comunicação visual"],
    especificacoes: [
      ["Material", "Acrílico"],
      ["Formato", "Chapa"],
    ],
  },
  {
    id: 5,
    nome: "TESTE 2",
    imagem: "logo_corex.webp",
    cor: "amarelo",
    corMoldura: "#00f345",
    categoria: "Chapas plásticas",
    descricao:
      "Material versátil, indicado para comunicação visual, displays e projetos personalizados.",
    tamanhos: ["1000 x 2000 mm", "1220 x 2440 mm"],
    cores: ["Cristal", "Branco", "Preto"],
    aplicacoes: ["Displays", "Expositores", "Comunicação visual"],
    especificacoes: [
      ["Material", "Acrílico"],
      ["Formato", "Chapa"],
    ],
  },
];

function Produtos() {
  const [produtoSelecionado, setProdutoSelecionado] = useState(null);

  // BUSCA E ORDENAÇÃO
  const [busca, setBusca] = useState("");
  const [ordenacao, setOrdenacao] = useState("az");

  const produtosFiltrados = produtosModelo
    .filter((produto) =>
      produto.nome
        .toLocaleLowerCase("pt-BR")
        .includes(busca.trim().toLocaleLowerCase("pt-BR")),
    )
    .sort((a, b) => {
      const comparacao = a.nome.localeCompare(b.nome, "pt-BR", {
        numeric: true,
        sensitivity: "base",
      });

      return ordenacao === "az" ? comparacao : -comparacao;
    });

  function fecharModal() {
    setProdutoSelecionado(null);
  }

  return (
    <main className="pagina-produtos">
      <section className="produtos-banner">
        <div className="produtos-container">
          <div className="produtos-banner-conteudo">
            <div className="produtos-banner-texto">
              <nav
                className="produtos-caminho"
                aria-label="Navegação estrutural"
              >
                <Link to="/">Home</Link>
                <span> / </span>
                <span aria-current="page">Produtos</span>
              </nav>

              <h1>Nossos Produtos</h1>
              <div className="produtos-detalhe"></div>
            </div>

            <img
              className="produtos-banner-logo"
              src={`${import.meta.env.BASE_URL}logo_footer.webp`}
              alt="Melifort Plásticos"
            />
          </div>
        </div>
      </section>

      <section className="produtos-vitrine">
        <div className="produtos-container">
          <h2>Conheça nossa linha de produtos</h2>

          {/* BUSCA E ORDENAÇÃO */}
          <div className="produtos-filtros">
            <div className="produtos-filtro-grupo">
              <label htmlFor="produtos-busca">Buscar produto</label>

              <div className="produtos-filtro-moldura">
                <input
                  id="produtos-busca"
                  type="search"
                  placeholder="   Digite o nome do produto..."
                  value={busca}
                  onChange={(evento) => setBusca(evento.target.value)}
                />
              </div>
            </div>

            <div className="produtos-filtro-grupo">
              <label htmlFor="produtos-ordenacao">Ordenar por</label>

              <div className="produtos-filtro-moldura">
                <select
                  id="produtos-ordenacao"
                  value={ordenacao}
                  onChange={(evento) => setOrdenacao(evento.target.value)}
                >
                  <option value="az">Nome: A–Z</option>
                  <option value="za">Nome: Z–A</option>
                </select>
              </div>
            </div>
          </div>

          {produtosFiltrados.length > 0 ? (
            <div className="produtos-grade">
              {produtosFiltrados.map((produto, indice) => (
                <article
                  className="produto-item"
                  key={produto.id}
                  style={{ "--produto-indice": indice }}
                >
                  <button
                    type="button"
                    className="produto-card-botao"
                    onClick={() => setProdutoSelecionado(produto)}
                    aria-label={`Ver detalhes de ${produto.nome}`}
                  >
                    <div
                      className={`produto-hexagono produto-${produto.cor}`}
                      style={{ "--cor-moldura": produto.corMoldura }}
                    >
                      <div className="produto-hexagono-imagem">
                        <div className="produto-moldura">
                          <div className="produto-moldura-interior">
                            <img
                              src={`${import.meta.env.BASE_URL}${produto.imagem}`}
                              alt=""
                            />
                          </div>
                        </div>
                        <h3>{produto.nome}</h3>
                      </div>
                    </div>
                  </button>
                </article>
              ))}
            </div>
          ) : (
            <p className="produtos-sem-resultados" role="status">
              Nenhum produto encontrado para sua busca.
            </p>
          )}
        </div>
      </section>

      {produtoSelecionado && (
        <ModalProduto
          key={produtoSelecionado.id}
          produto={produtoSelecionado}
          aoFechar={fecharModal}
        />
      )}
    </main>
  );
}

export default Produtos;
