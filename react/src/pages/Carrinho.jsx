import { useState } from "react";
import { Link } from "react-router-dom";
import { useCarrinho } from "../context/CarrinhoContext.jsx";
import "./Carrinho.css";
import { Turnstile } from "@marsidev/react-turnstile";

function Carrinho() {
  const { itens, quantidadeTotal, alterarQuantidade, removerItem } =
    useCarrinho();

  const [dados, setDados] = useState({
    nome: "",
    email: "",
    telefone: "",
    cep: "",
    numero: "",
    documento: "",
  });

  const [arquivo, setArquivo] = useState(null);
  const [mensagem, setMensagem] = useState("");
  const [captchaToken, setCaptchaToken] = useState("");

  function atualizarCampo(evento) {
    const { name, value } = evento.target;

    setDados((dadosAtuais) => ({
      ...dadosAtuais,
      [name]: value,
    }));
  }

  function caminhoImagem(imagem) {
    if (/^https?:\/\//i.test(imagem)) {
      return imagem;
    }

    return `${import.meta.env.BASE_URL}${imagem.replace(/^\/+/, "")}`;
  }

  function enviarCotacao(evento) {
    evento.preventDefault();

    if (itens.length === 0) {
      setMensagem("Adicione pelo menos um produto à cotação.");
      return;
    }

    setMensagem(
      "Dados preenchidos. O envio da cotação será disponibilizado após a integração com o sistema de recebimento.",
    );
  }

  return (
    <main className="pagina-carrinho">
      <div className="carrinho-container">
        <nav className="carrinho-caminho" aria-label="Navegação estrutural">
          <Link to="/">Home</Link>
          <span>/</span>
          <Link to="/produtos">Produtos</Link>
          <span>/</span>
          <span aria-current="page">Minha Cotação</span>
        </nav>

        <header className="carrinho-cabecalho">
          <h1>Minha Cotação</h1>
          <p>Confira os produtos selecionados e solicite seu orçamento.</p>
        </header>

        <section className="carrinho-produtos">
          <div className="carrinho-secao-titulo">
            <h2>Produtos selecionados</h2>
            <span>
              {quantidadeTotal} {quantidadeTotal === 1 ? "unidade" : "unidades"}
            </span>
          </div>

          {itens.length === 0 ? (
            <div className="carrinho-vazio">
              <h3>Sua cotação está vazia</h3>
              <p>Explore nossos produtos e adicione os materiais desejados.</p>
              <Link to="/produtos" className="carrinho-continuar">
                Ver produtos
              </Link>
            </div>
          ) : (
            <div className="carrinho-lista">
              {itens.map((item) => (
                <article
                  className="carrinho-item"
                  key={`${item.id}-${item.tamanho}-${item.cor}`}
                >
                  <Link
                    to={`/produtos/${item.id}`}
                    className="carrinho-item-imagem"
                    aria-label={`Ver ${item.nome}`}
                  >
                    <img src={caminhoImagem(item.imagem)} alt={item.nome} />
                  </Link>

                  <div className="carrinho-item-informacoes">
                    <Link to={`/produtos/${item.id}`}>
                      <h3>{item.nome}</h3>
                    </Link>

                    <p>
                      <strong>Tamanho:</strong> {item.tamanho}
                    </p>
                    <p>
                      <strong>Cor:</strong> {item.cor}
                    </p>
                  </div>

                  <div className="carrinho-item-acoes">
                    <label>
                      Quantidade
                      <input
                        type="number"
                        min="1"
                        step="1"
                        value={item.quantidade}
                        onChange={(evento) =>
                          alterarQuantidade(
                            item.id,
                            item.tamanho,
                            item.cor,
                            evento.target.value,
                          )
                        }
                      />
                    </label>

                    <button
                      type="button"
                      className="carrinho-remover"
                      onClick={() =>
                        removerItem(item.id, item.tamanho, item.cor)
                      }
                      aria-label={`Remover ${item.nome} da cotação`}
                    >
                      Remover
                    </button>
                  </div>
                </article>
              ))}
            </div>
          )}

          {itens.length > 0 && (
            <div className="carrinho-rodape-produtos">
              <Link to="/produtos" className="carrinho-continuar">
                + Adicionar mais produtos
              </Link>
              <strong>Total: {quantidadeTotal} unidades</strong>
            </div>
          )}
        </section>

        <section className="carrinho-contato">
          <h2>Dados para contato</h2>

          <form onSubmit={enviarCotacao}>
            <div className="carrinho-formulario-grade">
              <input
                type="text"
                name="nome"
                placeholder="Seu nome"
                aria-label="Seu nome"
                autoComplete="name"
                value={dados.nome}
                onChange={atualizarCampo}
                required
              />

              <input
                type="email"
                name="email"
                placeholder="Seu e-mail"
                aria-label="Seu e-mail"
                autoComplete="email"
                value={dados.email}
                onChange={atualizarCampo}
                required
              />

              <input
                type="tel"
                name="telefone"
                placeholder="(00) 00000-0000"
                aria-label="Telefone ou WhatsApp"
                autoComplete="tel"
                value={dados.telefone}
                onChange={atualizarCampo}
                required
              />

              <input
                type="text"
                name="cep"
                placeholder="CEP: 00000-000"
                aria-label="CEP"
                autoComplete="postal-code"
                inputMode="numeric"
                maxLength={9}
                value={dados.cep}
                onChange={atualizarCampo}
                required
              />

              <input
                type="text"
                name="numero"
                placeholder="Número"
                aria-label="Número do endereço"
                autoComplete="address-line2"
                value={dados.numero}
                onChange={atualizarCampo}
                required
              />

              <input
                type="text"
                name="documento"
                placeholder="CPF/CNPJ"
                aria-label="CPF ou CNPJ"
                value={dados.documento}
                onChange={atualizarCampo}
                required
              />
            </div>

            <div className="carrinho-anexo">
              <label htmlFor="carrinho-arquivo">Anexar arquivo</label>

              <input
                id="carrinho-arquivo"
                type="file"
                accept=".pdf,.jpg,.jpeg,.png,.doc,.docx,.xls,.xlsx"
                onChange={(evento) =>
                  setArquivo(evento.target.files?.[0] ?? null)
                }
              />

              {arquivo && <p>Arquivo selecionado: {arquivo.name}</p>}
            </div>
            <div className="carrinho-captcha">
              <Turnstile
                siteKey={import.meta.env.VITE_TURNSTILE_SITE_KEY}
                options={{
                  theme: "light",
                  size: "normal",
                }}
                onSuccess={(token) => setCaptchaToken(token)}
                onExpire={() => setCaptchaToken("")}
                onError={() => setCaptchaToken("")}
              />
            </div>
            <button
              type="submit"
              className="carrinho-enviar"
              disabled={itens.length === 0}
            >
              Fazer orçamento
            </button>

            {mensagem && (
              <p className="carrinho-mensagem" role="status">
                {mensagem}
              </p>
            )}
          </form>
        </section>
      </div>
    </main>
  );
}

export default Carrinho;
