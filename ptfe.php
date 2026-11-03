<?php

define("TITULO", "PTFE");
define("DESCRIPTION", "Chapas e tarugos de PTFE na Melifort: baixíssimo atrito, excelente resistência química, isolação elétrica e ampla faixa de temperatura. Guarulhos/SP.");
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
				<p>O PTFE (Politetrafluoretileno) é um fluoropolímero de alto desempenho, reconhecido pelo baixíssimo coeficiente de atrito, elevada inércia química e ampla faixa de temperatura de trabalho. É utilizado em aplicações industriais exigentes, como vedações, revestimentos, isolação elétrica e componentes para ambientes químicos. Teflon® é uma marca registrada associada a determinados fluoropolímeros; a marca e o grau fornecidos devem ser confirmados conforme a disponibilidade.</p>
				<p>Disponível tanto em <strong>chapa</strong> quanto em <strong>tarugo</strong> — escolha a forma desejada ao lado.</p>

				<p><strong>Dimensões</strong></p>
				<div class="dimensoes-forma" data-forma="chapa">
					<ul>
						<li>Espessuras: 1,5mm a 100mm</li>
						<li>Largura: até 500mm</li>
						<li>Comprimento: até 1000mm (virgem puro)</li>
					</ul>
				</div>
				<div class="dimensoes-forma d-none" data-forma="tarugo">
					<ul>
						<li>Diâmetros: 10mm a 300mm</li>
						<li>Comprimento padrão: 100mm a 500mm</li>
					</ul>
				</div>

				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Um dos menores coeficientes de atrito entre os plásticos de engenharia</li>
					<li>Excelente resistência química a uma ampla variedade de substâncias</li>
					<li>Resistência a temperaturas de -200°C a +260°C</li>
					<li>Excelente isolante elétrico</li>
					<li>Pode ser fornecido em graus destinados a aplicações alimentícias, farmacêuticas ou de alta pureza, conforme especificação e documentação do fabricante</li>
					<li>Baixa aderência superficial e elevada inércia química</li>
					<li>Alta resistência ao envelhecimento e à degradação química ao longo do tempo</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Gaxetas, vedações e juntas de alta performance</li>
					<li>Anéis de vedação e O-rings especiais</li>
					<li>Revestimentos de tubulações e tanques</li>
					<li>Peças para indústria química e petroquímica</li>
					<li>Componentes para indústria farmacêutica e alimentícia</li>
					<li>Isolantes elétricos e eletrônicos</li>
					<li>Mancais e guias de baixíssimo atrito</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>
					Branco (virgem puro), Cinza (com carga de carbono ou grafite)
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
