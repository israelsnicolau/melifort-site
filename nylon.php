<?php

define("TITULO", "Nylon PA6");
define("DESCRIPTION", "Chapas e tarugos de Nylon PA6 na Melifort: resistência mecânica, desgaste e substituição de metais. Corte sob medida em Guarulhos/SP.");
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
				<p>O Nylon 6.0 (Poliamida PA6) é um plástico de engenharia reconhecido pela combinação de resistência mecânica, rigidez, resistência ao desgaste e capacidade de absorver impactos. É amplamente utilizado em peças estruturais e componentes de movimento, podendo substituir metais em diversas aplicações com a vantagem de menor peso e resistência à corrosão.</p>
				<p>Disponível tanto em <strong>chapa</strong> quanto em <strong>tarugo</strong> — escolha a forma desejada ao lado.</p>

				<p><strong>Dimensões</strong></p>
				<div class="dimensoes-forma" data-forma="chapa">
					<ul>
						<li>Espessuras: 5mm a 100mm</li>
						<li>Largura: 620mm a 1000mm</li>
						<li>Comprimento: 1000mm a 2000mm</li>
					</ul>
				</div>
				<div class="dimensoes-forma d-none" data-forma="tarugo">
					<ul>
						<li>Diâmetros: 10mm a 250mm</li>
						<li>Comprimento padrão: 1000mm</li>
					</ul>
				</div>

				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Alta resistência mecânica e rigidez</li>
					<li>Boa resistência ao desgaste e à abrasão</li>
					<li>Resistente a óleos, graxas e hidrocarbonetos</li>
					<li>Baixo atrito e boas características de deslizamento em aplicações adequadamente dimensionadas</li>
					<li>Leve em relação aos metais que pode substituir</li>
					<li>Fácil usinagem e bom acabamento superficial</li>
					<li>Boa resistência à fadiga</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Engrenagens, polias e cremalheiras</li>
					<li>Buchas, mancais e guias</li>
					<li>Rodas, roletes e suportes</li>
					<li>Componentes de máquinas têxteis</li>
					<li>Indústria automotiva e agrícola</li>
					<li>Peças estruturais em substituição ao metal</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>
					Natural (bege/creme), Preto, Verde (MoS₂ — autolubrificado)
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
