<?php

define("TITULO", "Home");
define("DESCRIPTION", "Produção especializada: peças de borracha, silicone e injeção plástica. Qualidade e precisão na fabricação para atender suas necessidades.");
define("KEYWORDS", "");

require 'includes/funcoes.php';
require 'includes/head.php';

echo $focus->CSS();
?>
</head>

<body>

	<?php require 'includes/topo.php'; ?>

	<main>
		<!--<div class="popup-inicial" id="popupInicial">
			<div class="popup-inicial__overlay"></div>

			<div class="popup-inicial__box">
				<button class="popup-inicial__fechar" id="fecharPopup">
					&times;
				</button>

				<img src="template/imagens/banner.jpg" alt="Logo">
			</div>
		</div>-->

		<div class="banner-home">
			<div class="banner-home__backgrounds">
				<div class="swiper banner-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="container h-100">
								<div class="banner-home__wrapper">
									<div class="banner-home__content">
										<h2>
											Policarbonato
										</h2>
										<p>
											O policarbonato Melifort oferece resistência excepcional, durabilidade inigualável e versatilidade para uma variedade de projetos. Confie na qualidade e segurança que ele proporciona.
										</p>
										<a href="<?php echo URL . "contato" ?>" class="cta">
											Entre em contato
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="container h-100">
								<div class="banner-home__wrapper">
									<div class="banner-home__content">
										<h2>
											Bobina de PVC
										</h2>
										<p>
											Com nossa experiência e compromisso com a excelência, oferecemos bobinas de PVC duráveis e versáteis para uma variedade de aplicações.
										</p>
										<a href="<?php echo URL . "contato" ?>" class="cta">
											Entre em contato
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="container h-100">
								<div class="banner-home__wrapper">
									<div class="banner-home__content">
										<h2>
											Acrílico
										</h2>
										<p>
											Seja para aplicações arquitetônicas, industriais ou de design, nosso acrílico é a escolha ideal para quem busca qualidade, beleza e confiabilidade.
										</p>
										<a href="<?php echo URL . "contato" ?>" class="cta">
											Entre em contato
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-button-next">
						<i class="fas fa-chevron-right"></i>
					</div>
					<div class="swiper-button-prev">
						<i class="fas fa-chevron-left"></i>
					</div>
				</div>
			</div>
			<a href="#produtos" class="scroll next-section">
				<i class="fas fa-chevron-down"></i>
			</a>
		</div>

		<div class="produtos-home default" id="produtos">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12">
						<h2>
							DESCUBRA O QUE HÁ DE MELHOR!
						</h2>
						<p>
							Explore o melhor em materiais plásticos para seu negócio ou residência com a Melifort! Nosso diferencial está em oferecer soluções ágeis e de qualidade, sempre com um atendimento personalizado e humano. Conte conosco para encontrar o que você precisa, com entrega rápida e eficiente. Vamos tornar sua busca por plásticos uma experiência agradável e descomplicada!
						</p>
						<a href="<?php echo URL . "produtos" ?>" class="action">
							VEJA MAIS PRODUTOS
							&nbsp;
							<i class="fas fa-angle-right"></i>
						</a>
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<a href="<?php echo URL . "cortina-de-pvc" ?>" class="produto-card">
									<div class="produto-card__image">
										<img src="<?php echo URL_IMAGENS . "bobina.jpg" ?>" alt="Cortina Bobina De Pvc Standard">
									</div>
									<div class="produto-card__body">
										<h5>
											Cortina Bobina De Pvc Standard
										</h5>
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-4">
								<a href="<?php echo URL . "chapa-de-policarbonato-alveolar" ?>" class="produto-card">
									<div class="produto-card__image">
										<img src="<?php echo URL_IMAGENS . "policarbonato-alveloar.jpg" ?>" alt="Policarbonato Alveloar">
									</div>
									<div class="produto-card__body">
										<h5>
											Chapa de Policarbonato Alveloar
										</h5>
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-4">
								<a href="<?php echo URL . "chapa-de-acrilico" ?>" class="produto-card">
									<div class="produto-card__image">
										<img src="<?php echo URL_IMAGENS . "acrilico.jpg" ?>" alt="Chapa De Acrílico">
									</div>
									<div class="produto-card__body">
										<h5>
											Chapa De Acrílico
										</h5>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="produto-home default" id="segmentos">
			<div class="container">
				<div class="default__head">
					<h2>
						SEGMENTOS
					</h2>
				</div>
				<div class="row mb-4">

					<div class="col-xl-2 col-md-4 col-sm-6">
						<a href="<?php echo URL . "mercados-frigorificos-acougues" ?>" class="produto-card">
							<div class="produto-card__image">
								<img src="<?php echo URL_IMAGENS .  "segmentos/thumb/acougue.png" ?>" alt="Mercados, Frigoríficos, Açougues">
							</div>
							<div class="produto-card__body">
								<h5>Mercados <br> Frigoríficos <br> Açougues</h5>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-md-4 col-sm-6">
						<a href="<?php echo URL . "comunicacao-visual" ?>" class="produto-card">
							<div class="produto-card__image">
								<img src="<?php echo URL_IMAGENS .  "segmentos/thumb/comunicacao-visual.png" ?>" alt="Comunicação Visual">
							</div>
							<div class="produto-card__body">
								<h5>Comunicação Visual</h5>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-md-4 col-sm-6">
						<a href="<?php echo URL . "industrias" ?>" class="produto-card">
							<div class="produto-card__image">
								<img src="<?php echo URL_IMAGENS .  "segmentos/thumb/industria.png" ?>" alt="Indústrias">
							</div>
							<div class="produto-card__body">
								<h5>Indústrias</h5>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-md-4 col-sm-6">
						<a href="<?php echo URL . "bares-e-restaurantes" ?>" class="produto-card">
							<div class="produto-card__image">
								<img src="<?php echo URL_IMAGENS .  "segmentos/thumb/bares.png" ?>" alt="Bares | restaurantes">
							</div>
							<div class="produto-card__body">
								<h5>Bares | Restaurantes</h5>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-md-4 col-sm-6">
						<a href="<?php echo URL . "toldos-e-coberturas" ?>" class="produto-card">
							<div class="produto-card__image">
								<img src="<?php echo URL_IMAGENS .  "segmentos/thumb/toldos.png" ?>" alt="Toldos | coberturas">
							</div>
							<div class="produto-card__body">
								<h5>Toldos | Coberturas</h5>
							</div>
						</a>
					</div>
					<div class="col-xl-2 col-md-4 col-sm-6">
						<a href="<?php echo URL . "residencial" ?>" class="produto-card">
							<div class="produto-card__image">
								<img src="<?php echo URL_IMAGENS .  "segmentos/thumb/residencial.png" ?>" alt="Residencial">
							</div>
							<div class="produto-card__body">
								<h5>Residencial</h5>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="buscar-home default" id="section-empresa">
			<div class="container">
				<div class="buscar-home__content">
					<div class="row">
						<div class="col-xl-6 col-md-0"></div>
						<div class="col-xl-6 col-lg-12">
							<h2>
								MELIFORT | PLÁSTICOS
							</h2>
							<p>
								Em um mundo em constante evolução, a Melifort se destaca por sua abordagem moderna e ágil. Nosso compromisso com a inovação nos permite proporcionar uma experiência incrível aos nossos clientes. Trabalhamos de forma eficiente para garantir que nossos produtos sejam distribuídos de forma rápida e segura, atendendo a diversos setores como mercados, açougues, frigoríficos, indústrias, residências e empresas de comunicação visual. Com um atendimento que se adapta às necessidades do cliente, estamos prontos para enfrentar os desafios do mercado moderno e entregar soluções ideais que fazem a diferença.
							</p>
							<form id="form-search" action="pesquisa" method="POST">
								<div class="form-pesquisar__content">
									<input type="text" name="search" placeholder="Descubra a excelência.">
									<button>
										<i class="fas fa-search"></i>
									</button>
								</div>
							</form>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
								Acesse nosso catálogo
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="avaliacoes default mb-5">
			<div class="container">
				<h2 class="mb-4 text-center">
					Avaliações
				</h2>
				<div class="swiper swiper-avaliacoes">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="box-avaliacao">
								<p>Atendimento e produto muito bons. A entrega foi rápida. Preço bem abaixo da minha região. Gostei e recomendo!</p>
								<div class="box-avaliacao__star">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<h5 class="mb-0 mt-2">
									Paulo Sergio Martins
								</h5>
								<div class="box-avaliacao__avatar">
									<img src="<?php echo URL_IMAGENS . "avaliacoes/1.png" ?>" alt="">
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="box-avaliacao">
								<p>Atendimento TOP feito por Sr. Rene, atencioso desde a apresentação do produto, dicas de instalação, desconto e ainda nos entregou na minha casa no mesmo dia. Material ótimo. Recomendo.</p>
								<div class="box-avaliacao__star">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<h5 class="mb-0 mt-2">
									Gislene Alves
								</h5>
								<div class="box-avaliacao__avatar">
									<img src="<?php echo URL_IMAGENS . "avaliacoes/2.png" ?>" alt="">
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="box-avaliacao">
								<p>
									Atendimento impecável, rápido e entrega foi realizada muito rapidamente. Grato pelo atendimento.
								</p>
								<div class="box-avaliacao__star">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<h5 class="mb-0 mt-2">
									Alexandre Vieira
								</h5>
								<div class="box-avaliacao__avatar">
									<img src="<?php echo URL_IMAGENS . "avaliacoes/3.png" ?>" alt="">
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="box-avaliacao">
								<p>
									Atendimento muito bom do atendente Gerson,pelo whatsapp! Respondeu todas as perguntas e fez certinho todo o pedido!
								</p>
								<div class="box-avaliacao__star">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<h5 class="mb-0 mt-2">
									Sergio Charleaux
								</h5>
								<div class="box-avaliacao__avatar">
									<img src="<?php echo URL_IMAGENS . "avaliacoes/4.png" ?>" alt="">
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="box-avaliacao">
								<p>
									Vendedor Renê com excelente atendimento, chegou o produto certinho, bem embalado e no prazo que me passaram.
								</p>
								<p class="mb-0">Super de confiança, certeza que farei outras compras futuras.</p>
								<div class="box-avaliacao__star">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<h5 class="mb-0 mt-2">
									Liliane Lima
								</h5>
								<div class="box-avaliacao__avatar">
									<img src="<?php echo URL_IMAGENS . "avaliacoes/5.png" ?>" alt="">
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="box-avaliacao">
								<p>
									O atendimento foi ótimo e atencioso. O produto é ótima qualidade. Recomendo!!
								</p>
								<div class="box-avaliacao__star">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<h5 class="mb-0 mt-2">
									Larissa Regazzo
								</h5>
								<div class="box-avaliacao__avatar">
									<img src="<?php echo URL_IMAGENS . "avaliacoes/6.png" ?>" alt="">
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="box-avaliacao">
								<p>
									Materiais ótimos de boa qualidade e entrega rápida e eficiente, além do ótimo atendimento, recomendo muito!!
								</p>
								<div class="box-avaliacao__star">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<h5 class="mb-0 mt-2">
									Ana Clara
								</h5>
								<div class="box-avaliacao__avatar">
									<img src="<?php echo URL_IMAGENS . "avaliacoes/7.png" ?>" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>

	<?php echo $focus->JS(); ?>
	<?php require 'includes/footer.php'; ?>

	<script>
		var swiper = new Swiper(".banner-swiper", {
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			effect: "fade",
			autoplay: {
				delay: 3500,
				disableOnInteraction: false,
			},
			speed: 1000,
			navigation: {
				nextEl: ".banner-swiper .swiper-button-next",
				prevEl: ".banner-swiper .swiper-button-prev",
			},
		});

		swiper.on('slideChange', function() {
			myCallbackfunction(this);
		});

		function myCallbackfunction(data) {

		}
	</script>

	<script>
		new Swiper(".swiper-avaliacoes", {
			spaceBetween: 30,
			slidesPerView: 3,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			breakpoints: {
				210: {
					slidesPerView: 1,
					spaceBetween: 10,
				},
				640: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				1024: {
					slidesPerView: 3,
					spaceBetween: 30,
				},
			},
		});
	</script>
	<script>
		const popup = document.getElementById("popupInicial");
		const fechar = document.getElementById("fecharPopup");

		/* FECHAR NO BOTÃO */
		fechar.addEventListener("click", () => {
			popup.classList.add("hidden");
		});

		/* FECHAR AO CLICAR FORA */
		popup.addEventListener("click", (e) => {
			if (e.target.classList.contains("popup-inicial__overlay")) {
				popup.classList.add("hidden");
			}
		});

		/* FECHAR AUTOMÁTICO APÓS 8 SEGUNDOS */
		setTimeout(() => {
			popup.classList.add("hidden");
		}, 1000000);
	</script>
</body>

</html>