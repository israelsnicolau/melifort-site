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

  const quantidadeTotal = itens.reduce(
    (total, item) => total + item.quantidade,
    0,
  );

  return (
    <CarrinhoContext.Provider value={{ itens, adicionarItem, quantidadeTotal }}>
      {children}
    </CarrinhoContext.Provider>
  );
}

export function useCarrinho() {
  return useContext(CarrinhoContext);
}
