<?php

define("TITULO", "Chapa De Petg");
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

				<p>O PETG é um termoplástico copoliéster versátil, podendo ser moldado, cortado, parafusado, estampado, serrado, jateado, rebitado, termoformado, usinado, pintado, polido e dobrado a frio, sem danos. Transparente e resistente, tem custo menor que acrílico e policarbonato.</p>
				<p>Usado em diversas aplicações, especialmente quando transparência é essencial.</p>
				<p>É fácil de moldar, não requer estufa antes da termoformagem e pode ser moldado em baixas temperaturas. Resistente e transparente, usado em displays e peças dobradas. Comum em viseiras de capacetes industriais. Pode ser colado com cola específica para PETG e impresso por serigrafia, UV ou tintas à base de solvente.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>Espessuras: 0,50 - 0,75 - 1 - 2 - 3 - 4 - 5 - 6</li>
					<li>Larguras: 1000 - 1220mm</li>
					<li>Comprimentos: 2000 - 2440mm</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Excelente Transparência</li>
					<li>Resistência a Impactos</li>
					<li>Leveza e Facilidade de Manuseio</li>
					<li>Durabilidade e Resistência a Intempéries</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Displays e Expositores</li>
					<li>Sinalização e Comunicação Visual</li>
					<li>Proteção de máquinas</li>
					<li>Equipamentos de segurança industrial, como máscaras</li>
					<li>Produtos médicos e farmacêuticos</li>
					<li>Embalagens de alimentos</li>
					<li>Peças termoformadas em vacuum-forming</li>
					<li>Equipamentos de refrigeração</li>
					<li>Moldagem e protótipos industriais</li>
					<li>Impressão em 3D</li>
					<li>Urnas e móveis</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>cristal</p>
			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>