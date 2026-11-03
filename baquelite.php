<?php

define("TITULO", "Baquelite");
define("DESCRIPTION", "Chapas de Baquelite resina fenólica na Melifort: isolamento elétrico, dureza e resistência ao calor. Corte sob medida em Guarulhos/SP.");
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
				<p>A Baquelite é um material termorrígido à base de resina fenólica, historicamente utilizado em aplicações elétricas e mecânicas. Apresenta boa isolação elétrica, elevada dureza superficial e resistência ao calor seco, sendo uma solução econômica para peças isolantes, suportes, bases e componentes técnicos.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>Espessuras: 5mm a 80mm</li>
					<li>Largura: 600mm a 1000mm</li>
					<li>Comprimento: 1000mm a 2000mm</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Excelente isolamento elétrico em baixa frequência</li>
					<li>Alta dureza e resistência à compressão</li>
					<li>Boa resistência ao calor seco, conforme formulação e especificação do fabricante</li>
					<li>Baixo coeficiente de expansão térmica</li>
					<li>Resistente a óleos minerais e hidrocarbonetos</li>
					<li>Custo muito competitivo</li>
					<li>Boa maquinabilidade</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Suportes e bases para componentes elétricos</li>
					<li>Peças isolantes em painéis e quadros elétricos</li>
					<li>Suportes de barra de distribuição (barramento)</li>
					<li>Placas de apoio e gabaritos em usinagem</li>
					<li>Peças estruturais em equipamentos elétricos antigos (retrofit)</li>
					<li>Terminais e blocos de ligação</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>
					Marrom escuro (natural)
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
