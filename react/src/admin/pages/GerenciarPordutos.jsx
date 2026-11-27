import "./GerenciarProdutos.css";
import { Plus, Search, Package } from "lucide-react";

function GerenciarProdutos() {
  return (
    <div className="gerenciar-produtos">
      <div className="produtos-cabecalho">
        <div className="produtos-titulo">
          <h1>Produtos</h1>
          <p>Gerencie o catálogo de produtos da Melifort.</p>
        </div>

        <button className="btn-novo-produto" type="button">
          <Plus className="icone-novo-produto" /> Novo Produto
        </button>
      </div>

      <div className="produtos-filtros">
        <div className="produtos-busca">
          <input
            className="pesquisa-produto"
            type="search"
            placeholder="Pesquisar produtos..."
            aria-label="Pesquisar produtos"
          />

          <button
            className="btn-busca-produto"
            type="button"
            aria-label="Buscar produtos"
          >
            <Search className="lupa-produto" />
          </button>
        </div>

        <div className="filtro-hexagonal">
          <select
            className="filtro-categoria"
            aria-label="Filtrar por categoria"
          >
            <option value="todos">Todas as categorias</option>
          </select>
        </div>

        <div className="filtro-hexagonal">
          <select className="filtro-status" aria-label="Filtrar por status">
            <option value="todos">Todos os status</option>
            <option value="ativo">Ativo</option>
            <option value="inativo">Inativo</option>
          </select>
        </div>
      </div>

      <div className="produtos-listagem">
        <div className="produtos-listagem-cabecalho">
          <h2>Lista de Produtos</h2>
          <span className="produtos-contador">0 produtos cadastrados</span>
        </div>

        <table className="produtos-tabela">
          <thead>
            <tr>
              <th scope="col">Imagem</th>
              <th scope="col">Produto</th>
              <th scope="col">Categoria</th>
              <th scope="col">Status</th>
              <th scope="col">Destaque</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td colSpan={6} className="produtos-vazio">
                <div className="produtos-vazio-conteudo">
                  <Package className="icone-produtos-vazio" />
                  <h3>Nenhum produto cadastrado</h3>
                  <p>Adicione seu primeiro produto ao catálogo.</p>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  );
}

export default GerenciarProdutos;
