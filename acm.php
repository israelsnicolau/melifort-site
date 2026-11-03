<?php

define("TITULO", "ACM");
define("DESCRIPTION", "Painéis de ACM na Melifort: leveza, planicidade e acabamento para fachadas, comunicação visual e revestimentos. Corte e dobra sob medida em Guarulhos/SP.");
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
				<p>O ACM (Aluminium Composite Material) é um painel composto por duas lâminas de alumínio unidas a um núcleo polimérico, geralmente à base de polietileno, ou a núcleos com carga mineral nas versões resistentes ao fogo. Combina baixo peso, boa rigidez, planicidade e acabamento visual, sendo amplamente utilizado em fachadas, revestimentos, comunicação visual e projetos arquitetônicos.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>Espessura total: 3mm e 4mm</li>
					<li>Largura: 1220mm e 1500mm</li>
					<li>Comprimento: 2440mm e 3050mm</li>
					<li>Lâmina de alumínio: 0,3mm a 0,5mm por face</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Baixo peso em relação a painéis metálicos maciços de rigidez equivalente</li>
					<li>Alta planicidade e rigidez estrutural</li>
					<li>Superfícies com diferentes sistemas de pintura e acabamento, conforme a linha e o fabricante</li>
					<li>Fácil corte, dobra e instalação</li>
					<li>Excelente acabamento visual — disponível em inúmeras cores e efeitos</li>
					<li>Boa resistência à corrosão das faces de alumínio, conforme acabamento e condições de uso</li>
					<li>Versões Fire Resistant (FR) podem utilizar núcleo com carga mineral, conforme especificação do fabricante</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Fachadas e revestimentos arquitetônicos</li>
					<li>Letreiros e totens de sinalização</li>
					<li>Stands e displays de eventos</li>
					<li>Forros e revestimentos de teto em áreas comerciais</li>
					<li>Mobiliário comercial e corporativo</li>
					<li>Painéis de identidade visual</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>
					Branco, Preto, Prata, Dourado, Cobre, Champagne, Vermelho, Azul, Verde e outras — consulte disponibilidade
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
