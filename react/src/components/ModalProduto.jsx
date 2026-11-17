import { useEffect, useRef, useState } from "react";
import "./ModalProduto.css";

function ModalProduto({ produto, aoFechar }) {
  const [tamanho, setTamanho] = useState(produto.tamanhos[0] ?? "");
  const [cor, setCor] = useState(produto.cores[0] ?? "");
  const [quantidade, setQuantidade] = useState(1);
  const [mensagem, setMensagem] = useState("");

  const modalRef = useRef(null);
  const fecharRef = useRef(null);

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
    setMensagem(
      "Produto selecionado! A integração com o carrinho de cotação será realizada futuramente.",
    );
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
              </label>

              <label>
                Cor
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
              </label>

              <label>
                Quantidade
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
              </label>
            </div>

            <button
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
