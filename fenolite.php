<?php

define("TITULO", "Fenolite");
define("DESCRIPTION", "Chapas de Fenolite na Melifort: laminado de papel com resina fenólica, boa isolação elétrica, rigidez e usinabilidade. Guarulhos/SP.");
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
				<p>O Fenolite é um laminado termorrígido produzido com camadas de papel impregnadas com resina fenólica e prensadas sob temperatura e pressão controladas. Apresenta boas propriedades de isolação elétrica, estabilidade dimensional e maquinabilidade, sendo uma solução tradicional e econômica para componentes elétricos, suportes, placas isolantes e peças técnicas de baixa a moderada solicitação mecânica.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>Espessuras: 3mm a 80mm</li>
					<li>Largura: 1000mm</li>
					<li>Comprimento: 2000mm</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Boa isolação elétrica</li>
					<li>Boa rigidez e resistência à compressão</li>
					<li>Boa maquinabilidade para um laminado termorrígido</li>
					<li>Resistência moderada à umidade, conforme o grau e as condições de uso</li>
					<li>Custo competitivo em relação a outros laminados técnicos</li>
					<li>Disponível em diferentes graus, conforme especificação do fabricante</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Painéis elétricos e suportes de componentes</li>
					<li>Placas de isolação em transformadores, motores e equipamentos elétricos</li>
					<li>Peças estruturais de baixa a moderada solicitação em equipamentos elétricos</li>
					<li>Suportes e espaçadores isolantes</li>
					<li>Componentes para aplicações elétricas e eletrônicas</li>
					<li>Gabaritos e fixadores em usinagem</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>
					Marrom/bege (natural)
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
