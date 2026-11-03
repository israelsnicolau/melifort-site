<?php

define("TITULO", "PVDF");
define("DESCRIPTION", "Chapas e tarugos de PVDF na Melifort: excelente resistência química, boa resistência mecânica, soldabilidade e opções de alta pureza. Guarulhos/SP.");
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
				<p>O PVDF (Fluoreto de Polivinilideno) é um fluoropolímero de alto desempenho que combina excelente resistência química, boa resistência mecânica, baixa absorção de umidade e possibilidade de soldagem em aplicações adequadas. É empregado em equipamentos químicos, farmacêuticos, semicondutores e sistemas de alta pureza. Kynar® é uma marca registrada associada a determinadas resinas de PVDF; a marca e o grau fornecidos devem ser confirmados conforme a disponibilidade.</p>
				<p>Disponível tanto em <strong>chapa</strong> quanto em <strong>tarugo</strong> — escolha a forma desejada ao lado.</p>

				<p><strong>Dimensões</strong></p>
				<div class="dimensoes-forma" data-forma="chapa">
					<ul>
						<li>Espessuras: 3mm a 50mm</li>
						<li>Largura: 600mm</li>
						<li>Comprimento: 1200mm</li>
					</ul>
				</div>
				<div class="dimensoes-forma d-none" data-forma="tarugo">
					<ul>
						<li>Diâmetros: 10mm a 100mm</li>
						<li>Comprimento padrão: 500mm a 1000mm</li>
					</ul>
				</div>

				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Excelente resistência a halogênios, ácidos e bases fortes</li>
					<li>Pode ser fornecido em graus de alta pureza para aplicações farmacêuticas, semicondutores e processos especiais, conforme especificação e documentação do fabricante</li>
					<li>Resistência mecânica superior ao PTFE</li>
					<li>Boa soldabilidade com equipamentos plásticos</li>
					<li>Resistência a UV e intempéries</li>
					<li>Boa estabilidade térmica em ampla faixa de uso, conforme o grau e a especificação do fabricante</li>
					<li>Existem graus com características de retardância à chama, conforme especificação do fabricante</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Tubulações e conexões para produtos químicos</li>
					<li>Revestimento interno de reatores químicos</li>
					<li>Indústria de semicondutores (ultrapuro)</li>
					<li>Indústria farmacêutica e biotecnologia</li>
					<li>Equipamentos de dessalinização</li>
					<li>Peças para indústria petroquímica</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>
					Natural (branco/translúcido)
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
