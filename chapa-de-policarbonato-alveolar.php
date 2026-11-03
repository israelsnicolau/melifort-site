<?php

define("TITULO", "Chapa De Policarbonato Alveolar");
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
					A chapa de policarbonato alveolar é um material plástico extremamente versátil e eficiente, amplamente utilizado em diversas aplicações graças às suas propriedades únicas. Com estrutura celular, ou "alveolar", ele oferece uma combinação superior de leveza, resistência e isolamento térmico.
				</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>Espessura 4mm | 6mm | 10mm</li>
					<li>Largura: 1050mm | 2100mm</li>
					<li>Comprimento: 3000 | 6000 metros</li>
				</ul>

				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Facilidade de Instalação</li>
					<li>Durabilidade</li>
					<li>Flexivel</li>
					<li>Leveza</li>
					<li>Translúcido</li>
					<li>Isolamento térmico</li>
					<li>Resistente a impacto</li>
					<li>Proteção UV</li>
				</ul>

				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Coberturas e Telhados</li>
					<li>Pergolados</li>
					<li>Residências</li>
					<li>Divisórias e Paredes</li>
					<li>Estufas Agrícolas</li>
					<li>Sinalização e Displays</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>Cristal, Fumê, Azul, Verde, Branco Leitoso</p>

			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>