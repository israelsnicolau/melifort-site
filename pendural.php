<?php

define("TITULO", "Pendural");
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
				<p>O pendural para trilho de cortina de PVC oferece uma solução prática e eficaz para a suspensão das cortinas em ambientes comerciais e residenciais. Substituindo métodos de fixação tradicionais, o pendural proporciona uma instalação rápida e segura, garantindo um suporte estável para as cortinas.</p>
				<p>Ele é ideal para fixar cortinas de PVC em trilhos, proporcionando praticidade e durabilidade. Este produto de excelente desempenho é ideal para as aplicações mais exigentes, oferecendo resistência e durabilidade.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>10cm</li>
					<li>15cm</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Instalação Rápida e Segura</li>
					<li>Suporte Estável para as Cortinas</li>
					<li>Durabilidade</li>
					<li>Praticidade de Uso</li>
					<li>Resistência</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Ambientes Comerciais e Residenciais</li>
					<li>Cortinas de PVC</li>
					<li>Trilhos de Cortina</li>
					<li>Suspensão de Cortinas</li>
					<li>Substituição de Ganchos Tradicionais</li>
				</ul>

			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>