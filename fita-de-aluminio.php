<?php

define("TITULO", "Fita De Alumínio");
define("DESCRIPTION", "Dê vida aos seus projetos com " . TITULO .  " da Melifort: versátil, vibrante e de qualidade superior. Transforme sua criatividade em realidade!");
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

				<p>A fita de alumínio para chapa de policarbonato alveolar oferece uma solução resistente e durável para a fixação e vedação de chapas em aplicações comerciais e residenciais. Substituindo métodos de fixação convencionais, a fita de alumínio proporciona uma aplicação simples e eficaz, garantindo uma vedação adequada e prolongando a vida útil das chapas.</p>
				<p>Ela é ideal para fixar chapas de policarbonato alveolar em estruturas, proporcionando segurança e estabilidade. Este produto de excelente desempenho é ideal para as aplicações mais exigentes, oferecendo resistência à corrosão e durabilidade.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>25x30metros</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Aplicação Simples e Eficiente</li>
					<li>Vedação Adequada</li>
					<li>Resistência à Corrosão</li>
					<li>Durabilidade</li>
					<li>Estabilidade</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Estruturas para Coberturas</li>
					<li>Estufas e Jardins de Inverno</li>
					<li>Fechamentos Laterais</li>
					<li>Toldos e Coberturas de Garagem</li>
					<li>Proteção de Áreas Externas</li>
					<li>Fixação de Chapas em Estruturas</li>
				</ul>

			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>