import {
  Users,
  Eye,
  FileText,
  MousePointerClick,
  Package,
  Star,
  ArrowUpRight,
} from "lucide-react";

import "./Dashboard.css";

const indicadores = [
  {
    titulo: "Visitantes",
    valor: "12.485",
    variacao: "+12,5%",
    icone: Users,
    cor: "azul",
  },
  {
    titulo: "Visualizações",
    valor: "38.920",
    variacao: "+8,2%",
    icone: Eye,
    cor: "laranja",
  },
  {
    titulo: "Cotações recebidas",
    valor: "186",
    variacao: "+15,3%",
    icone: FileText,
    cor: "azul",
  },
  {
    titulo: "Cliques no WhatsApp",
    valor: "342",
    variacao: "+6,4%",
    icone: MousePointerClick,
    cor: "laranja",
  },
];

const visitas = [
  { dia: "Seg", altura: 42 },
  { dia: "Ter", altura: 60 },
  { dia: "Qua", altura: 49 },
  { dia: "Qui", altura: 78 },
  { dia: "Sex", altura: 65 },
  { dia: "Sáb", altura: 52 },
  { dia: "Dom", altura: 87 },
];

const produtos = [
  {
    nome: "Policarbonato",
    acessos: 780,
    percentual: 100,
  },
  {
    nome: "Bobina de PVC",
    acessos: 540,
    percentual: 69,
  },
  {
    nome: "Chapa de Acrílico",
    acessos: 320,
    percentual: 41,
  },
];

function HexagonoLed({ icone: Icone, valor, cor }) {
  return (
    <div className={`dashboard-hexagono ${cor}`}>
      <div className="dashboard-hexagono-borda" />

      <div className="dashboard-hexagono-interior">
        <Icone size={23} strokeWidth={1.5} />
        <strong>{valor}</strong>
      </div>
    </div>
  );
}

function Dashboard() {
  return (
    <div className="dashboard">
      <div className="dashboard-cabecalho">
        <div>
          <span className="dashboard-sobretitulo">VISÃO GERAL</span>

          <h1>Dashboard</h1>

          <p>Acompanhe os indicadores e atividades do site.</p>
        </div>

        <select
          className="dashboard-periodo"
          defaultValue="30"
          disabled
          aria-label="Período dos indicadores"
        >
          <option value="30">Últimos 30 dias</option>
        </select>
      </div>

      <div className="dashboard-aviso">
        Visualização demonstrativa. Os dados reais serão conectados ao banco de
        dados e ao Google Analytics.
      </div>

      <div className="dashboard-indicadores">
        {indicadores.map((item) => (
          <article className="dashboard-indicador" key={item.titulo}>
            <HexagonoLed icone={item.icone} valor={item.valor} cor={item.cor} />

            <div className="dashboard-indicador-infos">
              <h2>{item.titulo}</h2>

              <div className="dashboard-variacao">
                <ArrowUpRight size={15} />
                <span>{item.variacao}</span>
              </div>

              <small>vs. período anterior</small>
            </div>
          </article>
        ))}
      </div>

      <div className="dashboard-grid">
        <section className="dashboard-painel">
          <div className="dashboard-painel-cabecalho">
            <h2>Visitas ao site</h2>

            <p>Evolução dos acessos nos últimos 7 dias</p>
          </div>

          <div className="dashboard-grafico">
            {visitas.map((item) => (
              <div className="dashboard-barra-coluna" key={item.dia}>
                <div className="dashboard-barra-fundo">
                  <div
                    className="dashboard-barra"
                    style={{
                      "--altura": `${item.altura}%`,
                    }}
                  />
                </div>

                <span>{item.dia}</span>
              </div>
            ))}
          </div>
        </section>

        <section className="dashboard-painel">
          <div className="dashboard-painel-cabecalho">
            <h2>Produtos mais acessados</h2>

            <p>Interesse dos visitantes por produto</p>
          </div>

          <div className="dashboard-produtos">
            {produtos.map((produto) => (
              <div className="dashboard-produto" key={produto.nome}>
                <div className="dashboard-produto-info">
                  <span>{produto.nome}</span>

                  <strong>{produto.acessos}</strong>
                </div>

                <div className="dashboard-produto-trilha">
                  <div
                    className="dashboard-produto-progresso"
                    style={{
                      "--largura": `${produto.percentual}%`,
                    }}
                  />
                </div>
              </div>
            ))}
          </div>
        </section>
      </div>

      <div className="dashboard-resumo">
        <div className="dashboard-resumo-item">
          <div className="dashboard-resumo-hex azul">
            <Package size={21} />
          </div>

          <span>Produtos cadastrados</span>

          <strong>5</strong>
        </div>

        <div className="dashboard-resumo-item">
          <div className="dashboard-resumo-hex laranja">
            <Star size={21} />
          </div>

          <span>Produtos em destaque</span>

          <strong>3</strong>
        </div>
      </div>
    </div>
  );
}

export default Dashboard;
