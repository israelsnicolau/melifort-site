<?php require_once "funcoes.php"; ?>

<header class="topo">
	<div class="topo-faixa">
		<div class="container">
			<div class="nav-contato">
				<p>
					<i class="fas fa-phone"></i> &nbsp; <a href="tel:551120847726">(11) 2084-7726</a>
					| <i class="fab fa-whatsapp"></i> &nbsp; <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5511937387748&text=Ol%C3%A1,%20encontrei%20voc%C3%AAs%20no%20Google.%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es.">(11) 93738-7748</a>
				</p>
				&nbsp;
				&nbsp;
				<form id="form-search" method="POST" action="pesquisa">
					<input type="search" name="search" placeholder="Descubra a excelência.">
					<button>
						<i class="fas fa-search"></i>
					</button>
				</form>
				<a href="<?php echo URL . "contato" ?>" class="topo-link">
					Contato
				</a>
				<p>
					<i class="fas fa-envelope"></i>
					&nbsp;
					<a href="mailto:contato@melifort.com.br">
						contato@melifort.com.br
					</a>
				</p>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					Catálogo
				</button>
			</div>
			<img src="<?php echo URL_IMAGENS . "line.png" ?>" alt="">
		</div>
	</div>
	<div class="container">
		<div class="topo-box">
			<div class="logo">
				<a href="<?php echo URL; ?>"><img src="<?php echo URL_IMAGENS ?>logo.png" alt="logo"></a>
			</div>
			<nav class="menu" data-menu-principal>
				<div data-btn-menu-responsivo class="btn-menu-responsivo">
					<div class="btn-menu" data-menu><i class="fas fa-bars"></i></div>
				</div>
				<div class="menu-box">
					<div id="close-menu-responsivo" class="btn-menu" data-menu><i class="fas fa-times-circle"></i></div>
					<ul class="nav-main-list">
						<li><a class="hvr-underline-reveal" href="<?php echo URL; ?>" title="Página Inicial">Home</a></li>
						<li><a class="hvr-underline-reveal" href="<?php echo URL . "empresa"; ?>" title="Quem Somos">Empresa</a></li>
						<li><a class="hvr-underline-reveal" href="<?php echo URL . "produtos"; ?>" title="Página de Produtos">Produtos</a></li>
						<li class="btn-dropdown">
							<a class="desktop-info" href="<?php echo URL . "servicos" ?>" title="Serviços">Serviços <i class="fas fa-angle-down"></i></a>
							<a class="mobile-info" href="javascript://" title="Serviços">Serviços <i class="fas fa-angle-down"></i></a>
							<ul class="ul-dropdown-responsivo">
								<li>
									<a href="<?php echo URL . "servicos#servicos" ?>" title="Usinagem">
										Usinagem
									</a>
								</li>
								<li>
									<a href="<?php echo URL . "servicos#servicos" ?>" title="Cortes Sob Medida">
										Cortes Sob Medida
									</a>
								</li>
								<li>
									<a href="<?php echo URL . "servicos#servicos" ?>" title="Peças Personalizadas">
										Peças Personalizadas
									</a>
								</li>
									<li>
									<a href="<?php echo URL . "servicos#servicos" ?>" title="Impressão 3D">
										Impressão 3D

									</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="hvr-underline-reveal" href="<?php echo URL . "cotacao" ?>" title="Cotação Online">
								Cotação Online
							</a>
						</li>
						<li>
							<a class="hvr-underline-reveal" href="<?php echo URL ?>programa-de-fidelidade" title="Programa de Fidelidade">
								Programa de Fidelidade
							</a>
						</li>
						<li>
							<a class="hvr-underline-reveal scroll" href="#segmentos" title="Segmentos">
								Segmentos
							</a>
						</li>
						<li><a class="hvr-underline-reveal" href="<?php echo URL; ?>contato" title="Entre em Contato">Contato</a></li>
					</ul>
				</div>
			</nav>

		</div>
	</div>
</header>

<!-- <div class="whatsapp-fixed">
	<div class="whatsapp-icon">
		<a href="https://api.whatsapp.com/send?1=pt_BR&amp;phone=<?= $config['site']['whatsapp']['numero']; ?>&text=Olá,%20encontrei%20vocês%20no%20Google.%20Gostaria%20de%20mais%20informações." title="Contato Via WhatsApp" target="_blank">
			<img src="<?php echo URL_IMAGENS . "whatsapp.png" ?>" alt="">
		</a>
	</div>
</div> -->

<div class="whatsapp-fixed">
	<a href="https://api.whatsapp.com/send?1=pt_BR&amp;phone=<?= $config['site']['whatsapp']['numero']; ?>&text=Olá,%20encontrei%20vocês%20no%20Google.%20Gostaria%20de%20mais%20informações." title="Contato Via WhatsApp" target="_blank">
		<img src="<?php echo URL_IMAGENS . "whatsapp.png" ?>" alt="">
	</a>
</div>
<!-- <div class="whatsapp-controller">
  <form id="form-whatsapp">
    <div class="header-form">
      <p>Olá! Para começarmos preencha os campos abaixo.</p>
      <i class="fas fa-times-circle close-whatsApp "></i>
    </div>
    <div class="body-form">
      <div class="formulario-box">
        <div>
          <input style="background: #fff !important;" type="text" name="nome" placeholder="Nome">
        </div>
      </div>
      <div class="formulario-box">
        <div>
          <input style="background: #fff !important;" type="email" name="email" placeholder="E-mail">
        </div>
      </div>
      <div class="formulario-box">
        <div>
          <input style="background: #fff !important;" id="telefone-whatsapp" type="tel" name="telefone" class="mask-telefone" placeholder="(00) 00000-0000">
        </div>
      </div>
      <div style="background: #fff !important;" class="formulario-box align-center">
        <button type="submit" class=" style-whatsapp" data-whatsapp_date="entraremContatoViaWhatsApp" data-digs="Teste">Iniciar a Conversa</button>
      </div>
    </div>
  </form>
</div> -->


<div class="social-midias">
	<!-- 	<a href="https://api.whatsapp.com/send/?phone=5511937387748&text&type=phone_number&app_absent=0" target="_blank" title="Whatsapp">
		<i class="fab fa-whatsapp"></i>
		<span>
			@Melifort
		</span>
	</a> -->
	<a href="https://www.instagram.com/melifortplasticos/" target="_blank" title="Instagram">
		<i class="fab fa-instagram"></i>
		&nbsp;
		<span>
			@Melifort
		</span>
	</a>
	<a href="https://www.facebook.com/people/Melifort-Com%C3%A9rcio-e-Distribui%C3%A7%C3%A3o-de-Pl%C3%A1sticos/61556387811162/?locale=pt_BR" target="_blank" title="Facebook">
		<i class="fab fa-facebook"></i>
		&nbsp;
		<span>
			@Melifort
		</span>
	</a>
	<a href="https://www.linkedin.com/company/melifort" target="_blank" title="Linkedin">
		<i class="fab fa-linkedin"></i>
		&nbsp;
		<span>
			@Melifort
		</span>
	</a>
	<a href="https://t.me/Melifort_brasil" target="_blank" title="Telegram">
		<i class="fab fa-telegram"></i>
		&nbsp;
		<span>
			@Melifort
		</span>
	</a>
</div>