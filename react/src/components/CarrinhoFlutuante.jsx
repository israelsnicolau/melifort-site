import { FaShoppingCart } from "react-icons/fa";
import { useCarrinho } from "../context/CarrinhoContext.jsx";
import "./CarrinhoFlutuante.css";

function CarrinhoFlutuante() {
  const { quantidadeTotal } = useCarrinho();

  if (quantidadeTotal === 0) {
    return null;
  }

  return (
    <button
      type="button"
      className="carrinho-flutuante"
      aria-label={`Minha cotação: ${quantidadeTotal} unidades`}
      title="Minha cotação"
    >
      <span className="carrinho-hexagono">
        <FaShoppingCart className="carrinho-icone" />
      </span>

      <span className="carrinho-contador">{quantidadeTotal}</span>
    </button>
  );
}

export default CarrinhoFlutuante;
