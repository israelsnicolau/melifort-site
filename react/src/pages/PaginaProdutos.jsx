import { useEffect, useRef, useState } from "react";
import { Link, useParams } from "react-router-dom";
import { useCarrinho } from "../context/CarrinhoContext.jsx";
import { produtosModelo } from "./Produtos.jsx";
import "./PaginaProdutos.css";

function PaginaProdutos() {
  const { id } = useParams();

  const produto = produtosModelo.find((item) => item.id === Number(id));

  const { adicionarItem } = useCarrinho();

  const [imagemAtiva, setImagemAtiva] = useState(0);
  const [tamanho, setTamanho] = useState("");
  const [cor, setCor] = useState("");
  const [quantidade, setQuantidade] = useState(1);
  const [mensagem, setMensagem] = useState("");

  const botaoCotacaoRef = useRef(null);

  const imagens = produto
    ? produto.imagens?.length
      ? produto.imagens
      : [produto.imagem]
    : [];

  useEffect(() => {
    setImagemAtiva(0);
    setTamanho(produto?.tamanhos?.[0] ?? "");
    setCor(produto?.cores?.[0] ?? "");
    setQuantidade(1);
    setMensagem("");
  }, [produto]);

  function caminhoImagem(imagem) {
    if (/^https?:\/\//i.test(imagem)) {
      return imagem;
    }

    return `${import.meta.env.BASE_URL}${imagem.replace(/^\/+/, "")}`;
  }

  function adicionarCotacao() {
    if (!produto) return;

    const origem = botaoCotacaoRef.current;
    const posicaoOrigem = origem?.getBoundingClientRect();

    const adicionado = adicionarItem(produto, tamanho, cor, quantidade);

    if (!adicionado) {
      setMensagem("Informe uma quantidade válida.");
      return;
    }

    setMensagem("Produto adicionado à cotação!");

    if (
      !posicaoOrigem ||
      window.matchMedia("(prefers-reduced-motion: reduce)").matches
    ) {
      return;
    }

    const inicioX = posicaoOrigem.left + posicaoOrigem.width / 2;
    const inicioY = posicaoOrigem.top + posicaoOrigem.height / 2;

    const numero = document.createElement("span");

    numero.className = "quantidade-voando";
    numero.textContent = `+${Number(quantidade)}`;
    numero.style.left = `${inicioX}px`;
    numero.style.top = `${inicioY}px`;

    document.body.appendChild(numero);

    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        const carrinho = document.querySelector(".carrinho-flutuante");

        if (!carrinho) {
          numero.remove();
          return;
        }

        const destino = carrinho.getBoundingClientRect();

        const distanciaX = destino.left + destino.width / 2 - inicioX;

        const distanciaY = destino.top + destino.height / 2 - inicioY;

        const animacao = numero.animate(
          [
            {
              transform: "translate(-50%, -50%) scale(1)",
              opacity: 1,
              offset: 0,
            },
            {
              transform: `translate(
                calc(-50% + ${distanciaX * 0.45}px),
                calc(-50% + ${distanciaY * 0.15 - 80}px)
              ) scale(1.15)`,
              opacity: 1,
              offset: 0.45,
            },
            {
              transform: `translate(
                calc(-50% + ${distanciaX}px),
                calc(-50% + ${distanciaY}px)
              ) scale(0.4)`,
              opacity: 0,
              offset: 1,
            },
          ],
          {
            duration: 850,
            easing: "ease-in-out",
            fill: "forwards",
          },
        );

        animacao.finished
          .then(() => {
            numero.remove();

            if (!carrinho.isConnected) return;

            carrinho.classList.remove("carrinho-pulso");
            void carrinho.offsetWidth;
            carrinho.classList.add("carrinho-pulso");
          })
          .catch(() => {
            numero.remove();
          });
      });
    });
  }

  if (!produto) {
    return (
      <main className="pagina-produto">
        <div className="pagina-produto-container">
          <h1>Produto não encontrado</h1>
          <Link to="/produtos">Voltar aos produtos</Link>
        </div>
      </main>
    );
  }

  return (
    <main className="pagina-produto">
      <div className="pagina-produto-container">
        <nav
          className="pagina-produto-caminho"
          aria-label="Navegação estrutural"
        >
          <Link to="/">Home</Link>
          <span>/</span>
          <Link to="/produtos">Produtos</Link>
          <span>/</span>
          <span aria-current="page">{produto.nome}</span>
        </nav>

        <section className="pagina-produto-conteudo">
          <div className="pagina-produto-galeria">
            <div className="pagina-produto-imagem-principal">
              <img
                src={caminhoImagem(imagens[imagemAtiva])}
                alt={produto.nome}
              />
            </div>

            {imagens.length > 1 && (
              <div className="pagina-produto-miniaturas">
                {imagens.map((imagem, indice) => (
                  <button
                    key={`${imagem}-${indice}`}
                    type="button"
                    className={imagemAtiva === indice ? "ativa" : ""}
                    onClick={() => setImagemAtiva(indice)}
                    aria-label={`Visualizar imagem ${indice + 1}`}
                    aria-pressed={imagemAtiva === indice}
                  >
                    <img src={caminhoImagem(imagem)} alt="" />
                  </button>
                ))}
              </div>
            )}
          </div>

          <div className="pagina-produto-informacoes">
            <span className="pagina-produto-categoria">
              {produto.categoria}
            </span>

            <h1>{produto.nome}</h1>

            <p className="pagina-produto-descricao">{produto.descricao}</p>

            <div className="pagina-produto-campos">
              <label>
                Tamanho
                <div className="pagina-produto-moldura-campo">
                  <select
                    value={tamanho}
                    onChange={(evento) => {
                      setTamanho(evento.target.value);
                      setMensagem("");
                    }}
                  >
                    {produto.tamanhos.map((opcao) => (
                      <option key={opcao} value={opcao}>
                        {opcao}
                      </option>
                    ))}
                  </select>
                </div>
              </label>

              <label>
                Cor
                <div className="pagina-produto-moldura-campo">
                  <select
                    value={cor}
                    onChange={(evento) => {
                      setCor(evento.target.value);
                      setMensagem("");
                    }}
                  >
                    {produto.cores.map((opcao) => (
                      <option key={opcao} value={opcao}>
                        {opcao}
                      </option>
                    ))}
                  </select>
                </div>
              </label>

              <label>
                Quantidade
                <div className="pagina-produto-moldura-campo">
                  <input
                    type="number"
                    min="1"
                    step="1"
                    value={quantidade}
                    onChange={(evento) => {
                      setQuantidade(evento.target.value);
                      setMensagem("");
                    }}
                  />
                </div>
              </label>
            </div>

            <button
              ref={botaoCotacaoRef}
              type="button"
              className="pagina-produto-cotacao"
              onClick={adicionarCotacao}
              disabled={
                !Number.isInteger(Number(quantidade)) || Number(quantidade) < 1
              }
            >
              Adicionar à cotação
            </button>

            {mensagem && (
              <p className="pagina-produto-mensagem" role="status">
                {mensagem}
              </p>
            )}
          </div>
        </section>

        <section className="pagina-produto-detalhes">
          <div className="pagina-produto-aplicacoes">
            <h2>Aplicações</h2>

            <ul>
              {produto.aplicacoes.map((aplicacao) => (
                <li key={aplicacao}>{aplicacao}</li>
              ))}
            </ul>
          </div>

          <div className="pagina-produto-especificacoes">
            <h2>Especificações técnicas</h2>

            <dl>
              {produto.especificacoes.map(([nome, valor]) => (
                <div key={nome}>
                  <dt>{nome}</dt>
                  <dd>{valor}</dd>
                </div>
              ))}
            </dl>
          </div>
        </section>

        {produto.videos?.length > 0 && (
          <section className="pagina-produto-videos">
            <h2>Vídeos do produto</h2>

            <div className="pagina-produto-videos-grade">
              {produto.videos.map((video, indice) => (
                <a
                  key={indice}
                  href={video.url}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="pagina-produto-video"
                >
                  {video.titulo || `Vídeo ${indice + 1}`}
                </a>
              ))}
            </div>
          </section>
        )}

        <p className="pagina-produto-aviso">
          Informações ilustrativas para demonstração. Medidas, cores e
          especificações sujeitas à confirmação.
        </p>
      </div>
    </main>
  );
}

export default PaginaProdutos;
