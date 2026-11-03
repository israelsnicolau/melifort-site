<?php

define("TITULO", "Chapa De Ps");
define("DESCRIPTION", "Dê vida aos seus projetos com " . TITULO .  " da Melifort: versátil, vibrante e de qualidade superior. Transforme sua criatividade em realidade!");
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

				<p>As Chapas de PS (Poliestireno) são amplamente utilizadas na comunicação visual devido às suas excelentes propriedades de impressão e versatilidade. Elas são ideais para a criação de peças em serigrafia e impressão digital UV direta, bem como para adesivação de vinil.</p>
				<p>Além disso, as chapas de PS são leves, fáceis de cortar e moldar, tornando-as uma escolha popular para uma variedade de aplicações na comunicação visual, como displays, placas de sinalização, painéis decorativos e muito mais. Sua durabilidade e resistência ao desgaste garantem que as peças permaneçam visualmente atraentes por um longo período de tempo.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>Espessuras: 1 - 2</li>
					<li>Larguras: 1000mm</li>
					<li>Comprimentos: 2000mm</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Excelente Transparência</li>
					<li>Leveza e Facilidade de Manuseio</li>
					<li>Adesivação</li>
					<li>Custo benefício</li>
				</ul>

				<p><strong>Aplicações</strong></p>
				<ul>
					<li><strong>Comunicação Visual:</strong> Displays, placas de sinalização, painéis decorativos.</li>
					<li><strong>Indústria Gráfica:</strong> Impressão em serigrafia e impressão digital UV direta.</li>
					<li><strong>Publicidade:</strong> Adesivação de vinil para criação de peças personalizadas.</li>
					<li><strong>Arte e Artesanato:</strong> Molduras, maquetes, peças decorativas.</li>
					<li><strong>Embalagens:</strong> Bandejas, blisters, proteção para produtos.</li>
					<li><strong>Construção Civil:</strong> Divisórias, proteção para áreas de trabalho.</li>
				</ul>

				<p><strong>CORES</strong></p>
				<p>Cristal, branco leitoso, azul, amarelo, vermelho, preto, verde</p>

			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>