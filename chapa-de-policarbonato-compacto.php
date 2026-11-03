<?php

define("TITULO", "Chapa De Policarbonato Compacto");
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

				<p>A chapa de policarbonato compacto é uma solução de alta performance que combina resistência e leveza em um único material. Extremamente resistente, ela é até 240 vezes mais resistente que o vidro, o que a torna uma opção ideal para aplicações que requerem durabilidade e segurança adicionais.</p>
				<p>Este material é incrivelmente leve, facilitando o transporte e a instalação sem comprometer a robustez. Sua versatilidade permite que seja usada em uma ampla gama de aplicações, incluindo coberturas, fachadas, barreiras de proteção, sinalização e muito mais. Além disso, o policarbonato compacto oferece excelente resistência a impactos e intempéries, garantindo uma longa vida útil e reduzindo a necessidade de substituições frequentes..</p>

				<p>
					<strong>
						Dimensões
					</strong>
				</p>
				<ul>
					<li>Espessuras: 2-3-4-5-6-10-15-20-30mm</li>
					<li>Larguras: 1000 - 2000 - 1220 - 2440mm</li>
					<li>Comprimentos: 2000 - 3000mm</li>
				</ul>

				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Alta Resistência a Impactos</li>
					<li>Transparência Cristalina</li>
					<li>Leveza</li>
					<li>Durabilidade</li>
					<li>Resistência a Intempéries</li>
					<li>Facilidade de Moldagem</li>
				</ul>

				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Fachadas de Edifícios</li>
					<li>Sinalização</li>
					<li>Displays e Expositores</li>
					<li>Coberturas e Toldos</li>
					<li>Divisórias Internas</li>
					<li>Proteções de Máquinas</li>
					<li>Mobiliário</li>
					<li>Aquários e Vitrines</li>
				</ul>

				<p>
					<strong>Cores</strong>
				</p>
				<p>
					Cristal
				</p>

			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>