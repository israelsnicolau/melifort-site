<?php

define("TITULO", "Fita Dupla Face Vhb - Acrílica");
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
				<p>
					Com a nossa fita de fixação permanente, você pode pendurar seus objetos de decoração e canaletas elétricas sem fazer sujeira, sem furar paredes e sem perder tempo! Ela é ideal para quem deseja uma solução prática e eficiente para a organização e decoração de ambientes.
				</p>
				<p><strong>Dimensões</strong></p>
				<ul>
					<li>5x20m</li>
					<li>9x20m</li>
					<li>12x20m</li>
					<li>15x20m</li>
					<li>19x20m</li>
					<li>25x20m</li>
				</ul>

				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Fixação Permanente</li>
					<li>Fácil instalação</li>
					<li>Isolamento Anticorrosivo</li>
					<li>Flexível</li>
					<li>Transparente</li>
					<li>Durabilidade</li>
				</ul>

				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Indústria</li>
					<li>Revenda</li>
					<li>Comunicação Visual</li>
					<li>Residências</li>
					<li>Transporte</li>
					<li>Expositores e Displays</li>
					<li>Quadros e Placas</li>
				</ul>

			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>