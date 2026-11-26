import {
  Users,
  Eye,
  FileText,
  MousePointerClick,
  Package,
  Star,
  Download,
  TrendingUp,
  Monitor,
  Globe,
  Clock,
} from "lucide-react";

import "./Dashboard.css";

const indicadores = [
  {
    titulo: "Visitantes",
    icone: Users,
    cor: "azul",
  },
  {
    titulo: "Visualizações",
    icone: Eye,
    cor: "laranja",
  },
  {
    titulo: "Cotações recebidas",
    icone: FileText,
    cor: "azul",
  },
  {
    titulo: "Cliques no WhatsApp",
    icone: MousePointerClick,
    cor: "laranja",
  },
  {
    titulo: "Downloads do catálogo",
    icone: Download,
    cor: "azul",
  },
  {
    titulo: "Taxa de conversão",
    icone: TrendingUp,
    cor: "laranja",
  },
];

const resumo = [
  {
    titulo: "Produtos cadastrados",
    icone: Package,
    cor: "azul",
  },
  {
    titulo: "Produtos em destaque",
    icone: Star,
    cor: "laranja",
  },
  {
    titulo: "Cotações pendentes",
    icone: Clock,
    cor: "azul",
  },
];

function HexagonoLed({ icone: Icone, cor, valor }) {
  return (
    <div className={`dashboard-hexagono ${cor}`}>
      <div className="dashboard-hexagono-borda" />

      <div className="dashboard-hexagono-interior">
        <Icone size={21} strokeWidth={1.6} />
        <strong>{valor ?? "—"}</strong>
      </div>
    </div>
  );
}

function EstadoVazio({ texto = "Sem dados disponíveis" }) {
  return (
    <div className="dashboard-estado-vazio">
      <span>{texto}</span>
    </div>
  );
}

function Dashboard() {
  return (
    <div className="dashboard">
      <div className="dashboard-cabecalho">
        <h1>Dashboard</h1>

        <select
          className="dashboard-periodo"
          defaultValue="30"
          aria-label="Período dos indicadores"
          disabled
        >
          <option value="30">Últimos 30 dias</option>
        </select>
      </div>

      <div className="dashboard-indicadores">
        {indicadores.map((item) => (
          <article className="dashboard-indicador" key={item.titulo}>
            <HexagonoLed icone={item.icone} cor={item.cor} valor={null} />

            <h2>{item.titulo}</h2>
          </article>
        ))}
      </div>

      <div className="dashboard-grid">
        <section className="dashboard-painel">
          <div className="dashboard-painel-cabecalho">
            <h2>Tráfego do site</h2>
            <span>Visitantes e visualizações</span>
          </div>

          <div className="dashboard-grafico-vazio">
            <div className="dashboard-grafico-linhas">
              {Array.from({ length: 5 }, (_, index) => (
                <div key={index} />
              ))}
            </div>

            <EstadoVazio />
          </div>
        </section>

        <section className="dashboard-painel">
          <div className="dashboard-painel-cabecalho">
            <h2>Produtos mais acessados</h2>
          </div>

          <div className="dashboard-tabela">
            <div className="dashboard-tabela-topo">
              <span>Produto</span>
              <span>Acessos</span>
            </div>

            <EstadoVazio />
          </div>
        </section>
      </div>

      <div className="dashboard-resumo">
        {resumo.map((item) => {
          const Icone = item.icone;

          return (
            <article className="dashboard-resumo-item" key={item.titulo}>
              <div className={`dashboard-resumo-hex ${item.cor}`}>
                <Icone size={20} strokeWidth={1.7} />
              </div>

              <span>{item.titulo}</span>
              <strong>—</strong>
            </article>
          );
        })}
      </div>

      <div className="dashboard-grid-secundario">
        <section className="dashboard-painel">
          <div className="dashboard-painel-cabecalho">
            <h2>
              <Globe size={16} />
              Origem dos acessos
            </h2>
          </div>

          <EstadoVazio />
        </section>

        <section className="dashboard-painel">
          <div className="dashboard-painel-cabecalho">
            <h2>
              <Monitor size={16} />
              Dispositivos
            </h2>
          </div>

          <EstadoVazio />
        </section>

        <section className="dashboard-painel">
          <div className="dashboard-painel-cabecalho">
            <h2>
              <FileText size={16} />
              Últimas cotações
            </h2>
          </div>

          <EstadoVazio />
        </section>
      </div>
    </div>
  );
}

export default Dashboard;
