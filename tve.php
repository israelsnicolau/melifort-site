<?php

define("TITULO", "TVE");
define("DESCRIPTION", "Chapas de TVE, G10 e FR4 na Melifort: laminados de fibra de vidro e resina epóxi com elevada resistência mecânica e isolação elétrica. Guarulhos/SP.");
define("KEYWORDS", "");


require 'includes/funcoes.php';
require 'includes/head.php';

echo $focus->CSS();

?>
</head>

<body>

	<?php require 'includes/topo.php'; ?>

	<main class="produto-item">

		<div class="faixa-pgs">
			<div class="container">
				<div class="faixa-pgs__content">
					<?php echo $focus->breadcrumb(["Produtos", TITULO]) ?>
					<h1>
						<?php echo TITULO ?>
					</h1>
				</div>
			</div>
		</div>

		<div class="conteudo-informacoes item-produto">
			<div class="container">

				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-4">
						<?php include("includes/imagens-dinamicas.php") ?>
					</div>
					<div class="col-lg-4">
						<h3 class="mb-4">
							<?php echo TITULO ?>
						</h3>
						<?php include("includes/opcoes-produto.php") ?>
					</div>
					<div class="col-lg-1"></div>
				</div>
				<hr>
				<h3>
					Descrição
				</h3>
				<p>O TVE (Tecido de Vidro Epóxi) é um laminado termorrígido produzido com tecido de fibra de vidro impregnado com resina epóxi. G10 e FR4 são designações de materiais da mesma família, mas não são equivalentes em todas as especificações: o FR4 incorpora requisitos de retardância à chama, enquanto o G10 é tradicionalmente especificado por suas propriedades mecânicas e elétricas. Ambos oferecem elevada resistência mecânica, excelente isolação elétrica e boa estabilidade dimensional.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>Espessuras: 1,5mm a 60mm</li>
					<li>Largura: 1000mm</li>
					<li>Comprimento: 2000mm</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Excelente isolação elétrica, inclusive em aplicações de maior exigência</li>
					<li>Alta resistência mecânica e à flexão</li>
					<li>Boa estabilidade dimensional em ambientes úmidos</li>
					<li>Boa resistência a diversos solventes e agentes químicos, conforme as condições de uso</li>
					<li>FR4: versão com propriedades de retardância à chama conforme sua especificação</li>
					<li>Boa usinabilidade com ferramentas adequadas</li>
					<li>Ampla gama de espessuras disponíveis</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Placas e componentes para circuitos impressos (especialmente em FR4)</li>
					<li>Suportes de alta tensão em transformadores</li>
					<li>Painéis e barramentos de distribuição elétrica</li>
					<li>Componentes de equipamentos de medição e ensaio</li>
					<li>Indústria aeroespacial e aplicações técnicas especiais</li>
					<li>Gabaritos de precisão para usinagem</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>
					Verde (FR4), Natural/bege (G10)
				</p>

			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

	<script>

	</script>

</body>

</html>
