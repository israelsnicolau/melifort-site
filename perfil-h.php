<?php

define("TITULO", "Perfil H");
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
				<p>O perfil H feito de policarbonato, facilita a união entre as chapas por meio de pressão. Sua composição em policarbonato elimina a percepção de emendas na cobertura.</p>
				<p>É indicado para coberturas que tenham incidência mínima de ventos ou para emendas com instalação no sentido do caimento da água.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>4x6000</li>
					<li>6x6000</li>
					<li>4x1000</li>
					<li>4x3000</li>
					<li>4x6000</li>
					<li>6x1000</li>
					<li>6x2000</li>
					<li>6x3000</li>
					<li>6x6000</li>
					<li>10x6000</li>
					

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
				<ul>
					<li>Acabamentos em coberturas de policarbonato alveolar</li>
					<li>Acabamento de chapas em geral</li>
					<li>junção de chapas de policarbonato</li>
				</ul>

				<p><strong>Cor</strong></p>
				<p>Cristal, Fumê</p>


			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>