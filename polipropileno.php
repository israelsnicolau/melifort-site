<?php

define("TITULO", "Polipropileno (PP)");
define("DESCRIPTION", "Chapas e tarugos de Polipropileno PP na Melifort: resistência química, leveza, soldabilidade e excelente usinabilidade. Distribuidor em Guarulhos/SP.");
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
				<p>O Polipropileno (PP) é um termoplástico leve e quimicamente resistente, muito utilizado em ambientes que exigem contato com produtos químicos agressivos. Apresenta ótima soldabilidade, o que o torna preferido na fabricação de tanques, caixas e estruturas em plástico soldado. Disponível nas versões homopolímero (PP-H) e copolímero (PP-C).</p>
				<p>Disponível tanto em <strong>chapa</strong> quanto em <strong>tarugo</strong> — escolha a forma desejada ao lado.</p>

				<p><strong>Dimensões</strong></p>
				<div class="dimensoes-forma" data-forma="chapa">
					<ul>
						<li>Espessuras: 3mm a 60mm</li>
						<li>Largura: 1000mm a 2000mm</li>
						<li>Comprimento: 2000mm a 3000mm</li>
					</ul>
				</div>
				<div class="dimensoes-forma d-none" data-forma="tarugo">
					<ul>
						<li>Diâmetros: 20mm a 150mm</li>
						<li>Comprimento padrão: 1000mm</li>
					</ul>
				</div>

				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Excelente resistência química a ácidos e álcalis</li>
					<li>Leveza: densidade ~0,91 g/cm³</li>
					<li>Boa soldabilidade — permite construção de peças por solda plástica a quente</li>
					<li>Pode ser fornecido em graus destinados a aplicações com contato com alimentos, conforme especificação e documentação do fabricante</li>
					<li>Resistência a temperaturas de até 100°C (PP-H)</li>
					<li>Baixa absorção de umidade</li>
					<li>Custo-benefício excelente</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Tanques e reservatórios de produtos químicos</li>
					<li>Bancadas e mesas de trabalho em ambientes corrosivos</li>
					<li>Indústria galvânica e de tratamento de superfícies</li>
					<li>Indústria alimentícia e farmacêutica</li>
					<li>Equipamentos de laboratório</li>
					<li>Caixas e estruturas industriais soldadas</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>
					Natural (bege/cinza), Preto, Cinza, Cores sob consulta
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
