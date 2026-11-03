<?php

define("TITULO", "Poliacetal (POM)");
define("DESCRIPTION", "Chapas e tarugos de Poliacetal POM na Melifort: estabilidade dimensional, baixo atrito, excelente usinabilidade e corte sob medida. Guarulhos/SP.");
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
				<p>O Poliacetal (POM) é um termoplástico de engenharia com elevada rigidez, excelente estabilidade dimensional, baixo atrito e ótima usinabilidade. É amplamente utilizado na fabricação de engrenagens, buchas, roletes e componentes que exigem precisão e tolerâncias dimensionais controladas. Delrin® é uma marca registrada associada a determinadas resinas de POM; a marca e o grau fornecidos devem ser confirmados conforme a disponibilidade.</p>
				<p>Disponível tanto em <strong>chapa</strong> quanto em <strong>tarugo</strong> — escolha a forma desejada ao lado.</p>

				<p><strong>Dimensões</strong></p>
				<div class="dimensoes-forma" data-forma="chapa">
					<ul>
						<li>Espessuras: 3mm a 100mm</li>
						<li>Largura: 620mm a 1000mm</li>
						<li>Comprimento: 1000mm a 3000mm</li>
					</ul>
				</div>
				<div class="dimensoes-forma d-none" data-forma="tarugo">
					<ul>
						<li>Diâmetros: 10mm a 200mm</li>
						<li>Comprimento padrão: 1000mm</li>
					</ul>
				</div>

				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Alta rigidez e estabilidade dimensional</li>
					<li>Baixo coeficiente de atrito</li>
					<li>Excelente usinabilidade com acabamento superficial fino</li>
					<li>Boa resistência a óleos, graxas e hidrocarbonetos</li>
					<li>Resistência à fadiga</li>
					<li>Baixa absorção de umidade</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Engrenagens e cremalheiras</li>
					<li>Buchas e mancais de precisão</li>
					<li>Cames, roletes e polias</li>
					<li>Componentes de válvulas e bombas</li>
					<li>Peças automotivas de precisão</li>
					<li>Equipamentos médicos e laboratoriais</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>
					Natural (branco/bege), Preto
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
