<?php

define("TITULO", "Parafuso Sextavado");
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

				<p>O parafuso sextavado para cobertura de policarbonato oferece uma solução robusta e eficaz para fixação em projetos comerciais e residenciais. Substituindo métodos tradicionais de fixação, os parafusos sextavados garantem uma instalação segura e durável, proporcionando alta resistência à tração e ao desgaste.</p>
				<p>Eles são ideais para fixar chapas de policarbonato em diversas superfícies, como metal, madeira e plástico, assegurando estabilidade e longevidade. Este produto de excelente desempenho é ideal para as aplicações mais rigorosas, oferecendo durabilidade e excepcional resistência a intempéries.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>M5x20mm</li>
					<li>M6x30mm</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Alta Resistência à Tração</li>
					<li>Instalação Segura</li>
					<li>Durabilidade</li>
					<li>Resistência a Intempéries</li>
					<li>Facilidade de Manuseio</li>
					<li>Compatibilidade com Diversas Superfícies</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Coberturas de Policarbonato</li>
					<li>Estruturas Metálicas</li>
					<li>Instalação de Toldos</li>
					<li>Fixação de Painéis</li>
					<li>Construções Residenciais e Comerciais</li>
					<li>Montagem de Estruturas Arquitetônicas</li>
					<li>Fixação de Placas de Sinalização</li>
				</ul>

			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>