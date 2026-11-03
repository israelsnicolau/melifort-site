<?php

define("TITULO", "UHMW");
define("DESCRIPTION", "Chapas e tarugos de UHMW na Melifort: alta resistência ao desgaste, baixo atrito, resistência ao impacto e corte sob medida. Distribuidor em Guarulhos/SP.");
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
				<p>O UHMW (Ultra High Molecular Weight Polyethylene), ou polietileno de ultra alto peso molecular, é um plástico de engenharia reconhecido pela elevada resistência ao desgaste, pelo baixo coeficiente de atrito e pela excelente resistência ao impacto. Seu peso molecular extremamente elevado proporciona ótimo desempenho em aplicações de deslizamento, transporte, impacto e abrasão, sendo amplamente utilizado em componentes industriais de alta exigência.</p>
				<p>Disponível tanto em <strong>chapa</strong> quanto em <strong>tarugo</strong> — escolha a forma desejada ao lado.</p>

				<p><strong>Dimensões</strong></p>
				<div class="dimensoes-forma" data-forma="chapa">
					<ul>
						<li>Espessuras: 6mm a 150mm</li>
						<li>Largura: 1000mm</li>
						<li>Comprimento: 2000mm</li>
					</ul>
				</div>
				<div class="dimensoes-forma d-none" data-forma="tarugo">
					<ul>
						<li>Diâmetros: 20mm a 300mm</li>
						<li>Comprimento padrão: 1000mm</li>
					</ul>
				</div>

				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Resistência ao desgaste abrasivo extremamente elevada</li>
					<li>Coeficiente de atrito muito baixo (autolubrificante)</li>
					<li>Alta resistência ao impacto, inclusive em baixas temperaturas</li>
					<li>Pode ser fornecido em graus destinados a aplicações com contato com alimentos, conforme especificação e documentação do fabricante</li>
					<li>Resistente a produtos químicos e solventes</li>
					<li>Leve: densidade ~0,93 g/cm³</li>
					<li>Fácil usinagem e acabamento</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Guias, calhas e trilhos de transporte industrial</li>
					<li>Raspadores e desgastadores</li>
					<li>Indústria alimentícia (tábuas de corte, guias e componentes de esteiras, quando utilizado grau adequado)</li>
					<li>Mineração e siderurgia</li>
					<li>Buchas e mancais</li>
					<li>Peças de guia e suporte em equipamentos industriais</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>
					Natural (branco), Preto
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
