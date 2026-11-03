<?php

define("TITULO", "Nylon Tcast (PA6G)");
define("DESCRIPTION", "Chapas e tarugos de Nylon Tcast PA6G fundido na Melifort: alta resistência mecânica, grandes seções e aditivos especiais. Guarulhos/SP.");
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
				<p>O Nylon Tcast (PA6G — Poliamida 6 fundida) é produzido por processo de polimerização e fundição, permitindo a fabricação de peças de maiores dimensões e com menor nível de tensões internas em comparação com muitos produtos extrudados. Apresenta elevada resistência mecânica, boa estabilidade dimensional e excelente desempenho em aplicações sujeitas a desgaste e cargas elevadas.</p>
				<p>Disponível tanto em <strong>chapa</strong> quanto em <strong>tarugo</strong> — escolha a forma desejada ao lado.</p>

				<p><strong>Dimensões</strong></p>
				<div class="dimensoes-forma" data-forma="chapa">
					<ul>
						<li>Espessuras: 10mm a 200mm</li>
						<li>Largura: até 1000mm</li>
						<li>Comprimento: até 2000mm</li>
					</ul>
				</div>
				<div class="dimensoes-forma d-none" data-forma="tarugo">
					<ul>
						<li>Diâmetros: 30mm a 500mm</li>
						<li>Comprimento padrão: 500mm a 1000mm</li>
					</ul>
				</div>

				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Propriedades mecânicas superiores ao PA6 extrudado</li>
					<li>Menor tensão interna — maior estabilidade dimensional</li>
					<li>Excelente resistência ao desgaste por abrasão</li>
					<li>Disponível com aditivos, conforme a versão: MoS₂, óleo e grafite</li>
					<li>Possibilidade de peças de grande seção sem trincas</li>
					<li>Alta dureza superficial</li>
					<li>Bom desempenho em temperaturas elevadas</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Rodas e rodízios industriais de alta carga</li>
					<li>Engrenagens de grande módulo</li>
					<li>Buchas de mancal de alta solicitação</li>
					<li>Peças de equipamentos de mineração e siderurgia</li>
					<li>Polias e tambores de transportadores</li>
					<li>Componentes de prensas e equipamentos pesados</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>
					Natural (bege), Verde (MoS₂), Azul Oil (lubrificado com óleo), Preto (grafite)
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
