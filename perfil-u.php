<?php

define("TITULO", "Perfil U");
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

				<p>O Perfil U em policarbonato é projetado para ser utilizado na parte frontal de coberturas de policarbonato de 4 e 6mm com a função de dar acabamento e proteção em chapas alveolares em coberturas de policarbonato. Proporcionando um encaixe preciso que impede a entrada de água e sujeira nos alvéolos das placas. O Perfil U é comercializado em barras de 6 metros de comprimento.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>4x6000</li>
					<li>6x6000</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Leveza</li>
					<li>Curvado a frio</li>
					<li>Transparente</li>
					<li>Fácil instalação</li>
					<li>Corte facilitado</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<p>Acabamentos em coberturas de policarbonato alveolar</p>
				<p>Acabamento de chapas em geral</p>

			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>