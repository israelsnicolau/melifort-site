import { useEffect, useRef, useState } from "react";
import { useCarrinho } from "../context/CarrinhoContext.jsx";
import "./ModalProduto.css";

function ModalProduto({ produto, aoFechar }) {
  const { adicionarItem } = useCarrinho();

  const [tamanho, setTamanho] = useState(produto.tamanhos[0] ?? "");
  const [cor, setCor] = useState(produto.cores[0] ?? "");
  const [quantidade, setQuantidade] = useState(1);
  const [mensagem, setMensagem] = useState("");

  const modalRef = useRef(null);
  const fecharRef = useRef(null);
  const botaoCotacaoRef = useRef(null);

  useEffect(() => {
    const elementoAnterior = document.activeElement;
    const overflowAnterior = document.body.style.overflow;

    document.body.style.overflow = "hidden";
    fecharRef.current?.focus();

    function controlarTeclado(evento) {
      if (evento.key === "Escape") {
        aoFechar();
        return;
      }

      if (evento.key !== "Tab") return;

      const elementos = modalRef.current?.querySelectorAll(
        "button:not(:disabled), select:not(:disabled), input:not(:disabled), a[href]",
      );

      if (!elementos?.length) return;

      const primeiro = elementos[0];
      const ultimo = elementos[elementos.length - 1];

      if (evento.shiftKey && document.activeElement === primeiro) {
        evento.preventDefault();
        ultimo.focus();
      } else if (!evento.shiftKey && document.activeElement === ultimo) {
        evento.preventDefault();
        primeiro.focus();
      }
    }

    document.addEventListener("keydown", controlarTeclado);

    return () => {
      document.removeEventListener("keydown", controlarTeclado);
      document.body.style.overflow = overflowAnterior;
      elementoAnterior?.focus?.();
    };
  }, [aoFechar]);

  function adicionarCotacao() {
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

        const finalX = destino.left + destino.width / 2;
        const finalY = destino.top + destino.height / 2;

        const distanciaX = finalX - inicioX;
        const distanciaY = finalY - inicioY;

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

  return (
    <div
      className="produto-modal-fundo"
      onMouseDown={(evento) => {
        if (evento.target === evento.currentTarget) {
          aoFechar();
        }
      }}
    >
      <section
        ref={modalRef}
        className="produto-modal"
        role="dialog"
        aria-modal="true"
        aria-labelledby="produto-modal-titulo"
        aria-describedby="produto-modal-descricao"
      >
        <button
          ref={fecharRef}
          type="button"
          className="produto-modal-fechar"
          onClick={aoFechar}
          aria-label="Fechar detalhes do produto"
        >
          ×
        </button>

        <div className="produto-modal-conteudo">
          <div className="produto-modal-imagem">
            <img
              src={`${import.meta.env.BASE_URL}${produto.imagem}`}
              alt={produto.nome}
            />
          </div>

          <div className="produto-modal-informacoes">
            <span className="produto-modal-categoria">{produto.categoria}</span>

            <h2 id="produto-modal-titulo">{produto.nome}</h2>

            <p id="produto-modal-descricao">{produto.descricao}</p>

            <div className="produto-modal-campos">
              <label>
                Tamanho
                <div className="produto-modal-moldura-campo">
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
                <div className="produto-modal-moldura-campo">
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
                <div className="produto-modal-moldura-campo">
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
              className="produto-modal-cotacao"
              onClick={adicionarCotacao}
              disabled={
                !Number.isInteger(Number(quantidade)) || Number(quantidade) < 1
              }
            >
              Adicionar à cotação
            </button>

            {mensagem && (
              <p className="produto-modal-mensagem" role="status">
                {mensagem}
              </p>
            )}
          </div>
        </div>

        <div className="produto-modal-detalhes">
          <div>
            <h3>Aplicações</h3>
            <ul>
              {produto.aplicacoes.map((aplicacao) => (
                <li key={aplicacao}>{aplicacao}</li>
              ))}
            </ul>
          </div>

          <div>
            <h3>Especificações técnicas</h3>

            <dl className="produto-modal-especificacoes">
              {produto.especificacoes.map(([nome, valor]) => (
                <div key={nome}>
                  <dt>{nome}</dt>
                  <dd>{valor}</dd>
                </div>
              ))}
            </dl>
          </div>
        </div>

        <p className="produto-modal-aviso">
          Informações ilustrativas para demonstração. Medidas, cores e
          especificações sujeitas à confirmação.
        </p>
      </section>
    </div>
  );
}

export default ModalProduto;
