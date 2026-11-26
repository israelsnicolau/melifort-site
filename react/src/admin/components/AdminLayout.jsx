import { NavLink, Outlet } from "react-router-dom";
import {
  LayoutDashboard,
  Package,
  Star,
  ClipboardList,
  BarChart3,
  Settings,
  ExternalLink,
  UserRound,
} from "lucide-react";

import "./AdminLayout.css";

export const ROTA_GESTAO = "/x7Kp92mQ4vR8";

const menu = [
  { nome: "Dashboard", caminho: "", icone: LayoutDashboard },
  { nome: "Produtos", caminho: "produtos", icone: Package },
  { nome: "Destaques", caminho: "destaques", icone: Star },
  { nome: "Cotações", caminho: "cotacoes", icone: ClipboardList },
  { nome: "Relatórios", caminho: "relatorios", icone: BarChart3 },
  { nome: "Configurações", caminho: "configuracoes", icone: Settings },
];

function AdminLayout() {
  return (
    <div className="admin-layout">
      <aside className="admin-sidebar">
        <div className="admin-marca">
          <img
            src={`${import.meta.env.BASE_URL}logo.webp`}
            alt="Melifort"
            className="admin-logo"
          />
        </div>

        <nav className="admin-menu" aria-label="Menu administrativo">
          {menu.map((item) => {
            const Icone = item.icone;

            const destino = item.caminho
              ? `${ROTA_GESTAO}/${item.caminho}`
              : ROTA_GESTAO;

            return (
              <NavLink
                key={item.nome}
                to={destino}
                end={!item.caminho}
                className={({ isActive }) =>
                  `admin-menu-item ${isActive ? "ativo" : ""}`
                }
              >
                <span className="admin-menu-icone">
                  <Icone size={17} strokeWidth={1.8} />
                </span>

                <span>{item.nome}</span>
              </NavLink>
            );
          })}
        </nav>

        <div className="admin-sidebar-rodape">
          <NavLink to="/" className="admin-voltar-site">
            <ExternalLink size={16} />
            <span>Visualizar site</span>
          </NavLink>

          <small>Melifort © {new Date().getFullYear()}</small>
        </div>
      </aside>

      <div className="admin-conteudo">
        <header className="admin-topbar">
          <span>Gestão do site</span>

          <div className="admin-usuario">
            <span className="admin-usuario-hex">
              <UserRound size={17} />
            </span>

            <span>Administrador</span>
          </div>
        </header>

        <main className="admin-pagina">
          <Outlet />
        </main>
      </div>
    </div>
  );
}

export default AdminLayout;
