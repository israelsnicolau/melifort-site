import "./App.css";
import Header from "./components/Header.jsx";
import Banner from "./components/Banner.jsx";
import Destaques from "./components/Destaques.jsx";
import Segmentos from "./components/Segmentos.jsx";
import Sobre from "./components/sobre.jsx";
import Avaliacoes from "./components/Avaliacoes.jsx";
import Footer from "./components/Footer.jsx";
import WhatsappFlutuante from "./components/WhatsappFlutuante.jsx";

function App() {
  return (
    <>
      {/*CHAMA CABECALHO*/}
      <Header />

      {/*CHAMA BANNER PRINCIPAL*/}
      <Banner />

      {/*CHAMA DESTAQUES*/}
      <Destaques />

      {/*CHAMA SEGMENTOS*/}
      <Segmentos />

      {/*CHAMA SOBRE*/}
      <Sobre />

      {/*CHAMA AVALIACOES*/}
      <Avaliacoes />

      {/*CHAMA RODAPE*/}
      <Footer />

      {/*WHATSAPP FLUTUANTE*/}
      <WhatsappFlutuante />
    </>
  );
}

export default App;
