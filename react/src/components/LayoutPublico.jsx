import { Outlet } from "react-router-dom";
import Header from "./Header.jsx";
import Footer from "./Footer.jsx";
import WhatsappFlutuante from "./WhatsappFlutuante.jsx";
import CarrinhoFlutuante from "./CarrinhoFlutuante.jsx";

function LayoutPublico() {
  return (
    <>
      <Header />
      <Outlet />
      <Footer />
      <WhatsappFlutuante />
      <CarrinhoFlutuante />
    </>
  );
}

export default LayoutPublico;
