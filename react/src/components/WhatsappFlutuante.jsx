import { FaWhatsapp } from "react-icons/fa";
import "./WhatsappFlutuante.css";

function WhatsappFlutuante() {
  const numero = "5511937387748";

  const mensagem = encodeURIComponent(
    "Olá! Encontrei o site da Melifort e gostaria de mais informações.",
  );

  const link = `https://wa.me/${numero}?text=${mensagem}`;

  return (
    <a
      href={link}
      className="whatsapp-flutuante"
      target="_blank"
      rel="noopener noreferrer"
      aria-label="Conversar com a Melifort pelo WhatsApp"
      title="Fale com a Melifort"
    >
      <span className="whatsapp-hexagono">
        <FaWhatsapp className="whatsapp-icone" />
      </span>
    </a>
  );
}

export default WhatsappFlutuante;
