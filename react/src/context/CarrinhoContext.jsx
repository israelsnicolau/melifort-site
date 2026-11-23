import { createContext, useContext, useState } from "react";

const CarrinhoContext = createContext(null);

export function CarrinhoProvider({ children }) {
  const [itens, setItens] = useState([]);

  function adicionarItem(produto, tamanho, cor, quantidade) {
    const quantidadeNumerica = Number(quantidade);

    if (!Number.isInteger(quantidadeNumerica) || quantidadeNumerica < 1) {
      return false;
    }

    setItens((itensAtuais) => {
      const itemExistente = itensAtuais.find(
        (item) =>
          item.id === produto.id &&
          item.tamanho === tamanho &&
          item.cor === cor,
      );

      if (itemExistente) {
        return itensAtuais.map((item) =>
          item === itemExistente
            ? {
                ...item,
                quantidade: item.quantidade + quantidadeNumerica,
              }
            : item,
        );
      }

      return [
        ...itensAtuais,
        {
          id: produto.id,
          nome: produto.nome,
          imagem: produto.imagem,
          tamanho,
          cor,
          quantidade: quantidadeNumerica,
        },
      ];
    });

    return true;
  }

  function alterarQuantidade(id, tamanho, cor, quantidade) {
    const novaQuantidade = Number(quantidade);

    if (!Number.isInteger(novaQuantidade) || novaQuantidade < 1) {
      return;
    }

    setItens((itensAtuais) =>
      itensAtuais.map((item) =>
        item.id === id && item.tamanho === tamanho && item.cor === cor
          ? { ...item, quantidade: novaQuantidade }
          : item,
      ),
    );
  }

  function removerItem(id, tamanho, cor) {
    setItens((itensAtuais) =>
      itensAtuais.filter(
        (item) =>
          !(item.id === id && item.tamanho === tamanho && item.cor === cor),
      ),
    );
  }

  const quantidadeTotal = itens.reduce(
    (total, item) => total + item.quantidade,
    0,
  );

  return (
    <CarrinhoContext.Provider
      value={{
        itens,
        adicionarItem,
        alterarQuantidade,
        removerItem,
        quantidadeTotal,
      }}
    >
      {children}
    </CarrinhoContext.Provider>
  );
}

export function useCarrinho() {
  return useContext(CarrinhoContext);
}
