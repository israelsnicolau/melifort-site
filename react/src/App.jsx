import "./App.css";
import Header from "./components/Header.jsx";
import Banner from "./components/Banner.jsx";
import Destaques from "./components/Destaques.jsx";

function App() {
  return (
    <>
      {/*CHAMA CABECALHO*/}
      <Header />

      {/*CHAMA BANNER PRINCIPAL*/}
      <Banner />

      {/*CHAMA DESTAQUES*/}
      <Destaques />
    </>
  );
}

export default App;
