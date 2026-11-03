<?php

define("TITULO", "Chapa De Acrílico");
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
				<p>A chapa de acrílico oferece uma solução versátil e eficaz para diversas aplicações em projetos comerciais e industriais. Substituindo materiais como vidro e policarbonato, as chapas de acrílico proporcionam alta performance e transparência, além de serem leves e fáceis de manusear.</p>
				<p>Elas aderem bem a várias superfícies, como metal, madeira, vidro e plásticos, quando utilizadas com os adesivos apropriados.</p>
				<p>Este produto de excelente desempenho é ideal para as aplicações mais rigorosas, oferecendo durabilidade e resistência a intempéries.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>Espessuras: 2-3-4-5-6-10-15-20-30mm</li>
					<li>Larguras: 1000 - 2000 - 1220 - 2440mm</li>
					<li>Comprimentos: 2000 - 3000mm</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Alta Transparência</li>
					<li>Fácil de Moldar</li>
					<li>Leve</li>
					<li>Durável</li>
					<li>Resistente a Intempéries</li>
					<li>Variedade de Cores e Espessuras</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Sinalização</li>
					<li>Display e expositores</li>
					<li>Divisórias internas</li>
					<li>Mobiliário</li>
					<li>Peças especiais</li>
					<li>Produtos industriais</li>
					<li>Comunicação Visual</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>
					Cristal, verde, azul, amarelo, vermelho, laranja, preto, rose, ouro
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