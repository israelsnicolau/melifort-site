<?php

define("TITULO", "PEAD / PE500");
define("DESCRIPTION", "Chapas e tarugos de PEAD e PE500 na Melifort: resistência química, leveza, usinabilidade e opções para aplicações de desgaste. Corte sob medida em Guarulhos/SP.");
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
				<p>O PEAD (Polietileno de Alta Densidade) e o PE500 pertencem à família dos polietilenos, porém apresentam características e níveis de desempenho distintos. O PEAD se destaca pela resistência química, leveza e versatilidade, enquanto o PE500 possui maior peso molecular e é indicado para aplicações que exigem resistência superior ao desgaste e ao impacto. Ambos oferecem boa usinabilidade e ampla utilização industrial e comercial.</p>
				<p>Disponível tanto em <strong>chapa</strong> quanto em <strong>tarugo</strong> — escolha a forma desejada ao lado.</p>

				<p><strong>Dimensões</strong></p>
				<div class="dimensoes-forma" data-forma="chapa">
					<ul>
						<li>Espessuras: 3mm a 100mm</li>
						<li>Largura: 1000mm a 1500mm</li>
						<li>Comprimento: 2000mm a 3000mm</li>
					</ul>
				</div>
				<div class="dimensoes-forma d-none" data-forma="tarugo">
					<ul>
						<li>Diâmetros: 20mm a 200mm</li>
						<li>Comprimento padrão: 1000mm</li>
					</ul>
				</div>

				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Alta resistência química a ácidos, bases e solventes</li>
					<li>Leveza e facilidade de manuseio</li>
					<li>Baixa absorção de umidade</li>
					<li>Podem ser fornecidos em graus destinados a aplicações com contato com alimentos, conforme especificação e documentação do fabricante</li>
					<li>Boa resistência ao impacto</li>
					<li>Fácil de usinar, serrar e soldar</li>
					<li>Custo-benefício elevado</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Tábuas de corte e bancadas alimentícias, quando utilizado grau adequado</li>
					<li>Tanques e reservatórios</li>
					<li>Painéis e forros de câmaras frias e câmaras frigoríficas</li>
					<li>Buchas, mancais e peças de desgaste</li>
					<li>Construção civil e obras hidráulicas</li>
					<li>Indústria química e farmacêutica</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>
					Natural (bege/creme), Preto, Cores sob consulta
				</p>

			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

	<script>
		$(document).on("change", 'input[name="forma"]', function () {
			var forma = $(this).val();
			$(".dimensoes-forma").addClass("d-none");
			$(`.dimensoes-forma[data-forma="${forma}"]`).removeClass("d-none");
		});
	</script>

</body>

</html>
