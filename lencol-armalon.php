<?php

define("TITULO", "Lençol Armalon");
define("DESCRIPTION", "Lençol Armalon na Melifort: tecido de fibra de vidro revestido com PTFE para aplicações antiaderentes, térmicas e industriais. Guarulhos/SP.");
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
				<p>O Lençol Armalon é formado por tecido de fibra de vidro revestido ou impregnado com PTFE, combinando a estabilidade dimensional e a resistência mecânica do tecido com as características antiaderentes e o baixo atrito do revestimento de PTFE. É indicado para revestimentos, superfícies antiaderentes, selagem térmica, esteiras e aplicações industriais que exigem resistência térmica e facilidade de desprendimento.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>Espessuras: 0,13mm a 3,2mm</li>
					<li>Largura: até 1000mm</li>
					<li>Comprimento: fornecido em rolo ou folha sob medida</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Superfície antiaderente proporcionada pelo revestimento de PTFE</li>
					<li>Boa resistência química para diversas aplicações industriais</li>
					<li>Boa resistência a temperaturas elevadas, conforme espessura, construção e especificação do fabricante</li>
					<li>Boa resistência à tração e estabilidade dimensional proporcionadas pelo tecido de fibra de vidro</li>
					<li>Baixo coeficiente de atrito e facilidade de desprendimento</li>
					<li>Boa estabilidade dimensional em aplicações térmicas compatíveis</li>
					<li>Disponível em diferentes espessuras para cada aplicação</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Superfícies antiaderentes em equipamentos de embalagem</li>
					<li>Esteiras e correias de forno contínuo</li>
					<li>Revestimento de platôs e prensas de solda por impulso</li>
					<li>Superfícies de trabalho em equipamentos de solda plástica</li>
					<li>Indústria alimentícia: revestimento antiaderente de bandejas e moldes</li>
					<li>Isolamento térmico e elétrico em equipamentos industriais</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>
					Branco/translúcido (fibra de vidro aparente), Bege
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
