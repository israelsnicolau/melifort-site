<?php

define("TITULO", "Fita Dupla Face Branca");
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
				<p>A fita dupla face Melifort para ACM oferece uma solução prática e eficaz para a aplicação de chapas de alumínio composto em fachadas de edifícios.</p>
				<p>Substituindo rebites, soldas, adesivos líquidos e outros fixadores, desde que sejam seguidas as instruções do fabricante, a fita Melifort proporciona alta performance e aderência a diversas superfícies, como metal, madeira tratada, vidro, plásticos e superfícies pintadas.</p>
				<p>Este produto de excelente desempenho é ideal para as aplicações mais rigorosas na construção civil, especialmente em fachadas arquitetônicas.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>15x20m</li>
					<li>19x20m</li>
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
					<li>Fachadas de edifícios</li>
					<li>Instalação de painéis de alumínio composto</li>
					<li>Fixação de placas de sinalização</li>
					<li>Montagem de estruturas arquitetônicas</li>
					<li>Adesão de superfícies metálicas</li>
					<li>União de vidros e plásticos</li>
					<li>Fixação de madeira tratada e envernizada</li>
					<li>Aplicações em superfícies pintadas</li>
				</ul>


			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>