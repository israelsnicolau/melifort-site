<?php

define("TITULO", "Serviços");
define("DESCRIPTION", "Nosso compromisso com a excelência se reflete em nossa ampla gama de produtos, que incluem o aclamado Acrílico Colorido e Acrílico Cristal, perfeitos para uma variedade...");
define("KEYWORDS", "");

require 'includes/funcoes.php';
require 'includes/head.php';

echo $focus->CSS();

?>
</head>

<body>

	<?php require 'includes/topo.php'; ?>

	<main>

		<div class="faixa-pgs">
			<div class="container">
				<div class="faixa-pgs__content">
					<?php echo $focus->breadcrumb([TITULO]) ?>
					<h1>
						<?php echo TITULO ?>
					</h1>
				</div>
			</div>
		</div>

		<div class="servicos servicos--lista default mb-5" id="servicos">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xl-3">
						<div class="box-servico">
							<div class="box-servico__image">
								<img src="<?php echo URL_IMAGENS . "servicos/usinagem.jpg" ?>" alt="Usinagem">
							</div>
							<h4>
								Usinagem
							</h4>
							<p>
								A Melifort oferece serviços de usinagem de plásticos de engenharia, como PP, PEAD, UHMW, poliacetal, nylon, teflon, PU e TCAST. Transformamos esses materiais em peças personalizadas e de alta precisão, com inovação, qualidade e agilidade, atendendo todas as suas necessidades específicas.
							</p>
							<a target="_blank" href="https://api.whatsapp.com/send?1=pt_BR&phone=5511937387748&text=Ol%C3%A1,%20encontrei%20voc%C3%AAs%20no%20Google.%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="zap pulse">
								ORÇAMENTO
								<i class="fab fa-whatsapp"></i>
							</a>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="box-servico">
							<div class="box-servico__image">
								<img src="<?php echo URL_IMAGENS . "servicos/corte-sob-medida.jpg" ?>" alt="Corte sob Medida">
							</div>
							<h4>
								Corte sob Medida
							</h4>
							<p>
								Realizamos serviços de corte sob medida de diversos materiais com agilidade e qualidade. Cortamos tarugos, chapas e buchas em tamanhos semi-acabados, garantindo projetos únicos e flexíveis.
							</p>

							<p>Materiais que cortamos: Policarbonato Compacto e Alveolar, Acrílico, PS, PETG, PEAD, NY, POM, UHMW, PTFE, PP, TCAST e cortina de PVC.</p>
							<a target="_blank" href="https://api.whatsapp.com/send?1=pt_BR&phone=5511937387748&text=Ol%C3%A1,%20encontrei%20voc%C3%AAs%20no%20Google.%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="zap pulse">
								ORÇAMENTO
								<i class="fab fa-whatsapp"></i>
							</a>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="box-servico">
							<div class="box-servico__image">
								<img src="<?php echo URL_IMAGENS . "servicos/pecas-personalizadas.jpg" ?>" alt="Peças Personalizadas">
							</div>
							<h4>
								Peças Personalizadas
							</h4>
							<p>
								Realizamos a personalização de materiais conforme seu projeto, garantindo que suas especificações sejam atendidas com precisão e qualidade.
							</p>
							<a target="_blank" href="https://api.whatsapp.com/send?1=pt_BR&phone=5511937387748&text=Ol%C3%A1,%20encontrei%20voc%C3%AAs%20no%20Google.%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="zap pulse">
								ORÇAMENTO
								<i class="fab fa-whatsapp"></i>
							</a>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="box-servico">
							<div class="box-servico__image">
								<img src="<?php echo URL_IMAGENS . "servicos/impressao-3d.png" ?>" alt="Impressão 3D de peças e protótipos">
							</div>
							<h4>Impressão 3D</h4>
							<p>Fazemos projetos, peças e protótipos em impressão 3D — seja para sua empresa ou para uso pessoal.</p>
							<p>Tem uma ideia no papel, um componente que quebrou, um protótipo para validar ou um produto para desenvolver? A gente transforma em peça real com precisão e agilidade.</p>
							<p>Atendemos desde o profissional autônomo até a indústria, com suporte técnico em toda etapa: do arquivo à peça pronta.</p>
							<a target="_blank" rel="noopener noreferrer" href="https://api.whatsapp.com/send?1=pt_BR&phone=5511937387748&text=Ol%C3%A1,%20encontrei%20voc%C3%AAs%20no%20Google.%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="zap pulse">
								ORÇAMENTO
								<i class="fab fa-whatsapp"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>
