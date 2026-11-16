import { lazy, Suspense, useEffect, useRef, useState } from "react";

import Banner from "../components/Banner.jsx";
import Destaques from "../components/Destaques.jsx";
import Segmentos from "../components/Segmentos.jsx";
import Sobre from "../components/Sobre.jsx";

const Avaliacoes = lazy(() => import("../components/Avaliacoes.jsx"));

function Home() {
  const avaliacoesRef = useRef(null);
  const [mostrarAvaliacoes, setMostrarAvaliacoes] = useState(false);

  useEffect(() => {
    const elemento = avaliacoesRef.current;

    if (!elemento) return;

    const observer = new IntersectionObserver(
      ([entrada]) => {
        if (entrada.isIntersecting) {
          setMostrarAvaliacoes(true);
          observer.disconnect();
        }
      },
      {
        rootMargin: "300px",
      },
    );

    observer.observe(elemento);

    return () => observer.disconnect();
  }, []);

  return (
    <>
      <Banner />
      <Destaques />
      <Segmentos />
      <Sobre />

      <div
        ref={avaliacoesRef}
        style={{ minHeight: mostrarAvaliacoes ? undefined : 400 }}
      >
        {mostrarAvaliacoes && (
          <Suspense fallback={null}>
            <Avaliacoes />
          </Suspense>
        )}
      </div>
    </>
  );
}

export default Home;
