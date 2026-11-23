import { FaShoppingCart } from "react-icons/fa";
import { Link, useLocation } from "react-router-dom";
import { useCarrinho } from "../context/CarrinhoContext.jsx";
import "./CarrinhoFlutuante.css";

function CarrinhoFlutuante() {
  const location = useLocation();
  const { quantidadeTotal } = useCarrinho();

  if (quantidadeTotal === 0 || location.pathname === "/cotacao") {
    return null;
  }

  return (
    <Link
      to="/cotacao"
      className="carrinho-flutuante"
      aria-label={`Minha cotação: ${quantidadeTotal} unidades`}
      title="Minha cotação"
    >
      <span className="carrinho-hexagono">
        <FaShoppingCart className="carrinho-icone" />
      </span>

      <span className="carrinho-contador">{quantidadeTotal}</span>
    </Link>
  );
}

export default CarrinhoFlutuante;
