<?php

define("TITULO", "Chapa De Pvc Expandido");
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

				<p>O PVC Expandido é especialmente formulado para atender às necessidades da comunicação visual, sendo ideal para uso em ambientes internos e externos. Destaca-se pela versatilidade, proporcionando resultados excepcionais em processos como serigrafia, aplicação de vinil adesivo e impressões gráficas digitais.</p>
				<p>Sua eficiência nesse campo é atribuída à baixa absorção de água e à alta resistência às condições climáticas adversas. A estrutura de células fechadas confere-lhe resistência e durabilidade, com excelente capacidade de resistir a impactos e arranhões.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>Espessuras: 2 - 3 - 4 - 5 - 6 - 9 - 10 - 15 - 18 - 30</li>
					<li>Larguras: 1220mm</li>
					<li>Comprimentos: 2440mm</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Versatilidade para uso em ambientes internos e externos.</li>
					<li>Excelente desempenho em processos de serigrafia, aplicação de vinil adesivo e impressões gráficas digitais.</li>
					<li>Baixa absorção de água e alta resistência às condições climáticas.</li>
					<li>Estrutura de células fechadas que proporciona resistência e durabilidade.</li>
					<li>Capacidade de resistir a impactos e arranhões.</li>
					<li>Possibilidade de moldagem a partir de 130°C e termoformação a aproximadamente 170°C.</li>
				</ul>

				<p class="str">Aplicações</p>
				<ul>
					<li><strong>Comunicação visual:</strong> Sinalização, displays, letras caixa, placas publicitárias, etc.</li>
					<li><strong>Construção civil:</strong> Forros, divisórias, portas, janelas, revestimentos de parede, etc.</li>
					<li><strong>Indústria de móveis:</strong> Prateleiras, tampos de mesa, painéis decorativos, etc.</li>
					<li><strong>Indústria automotiva:</strong> Revestimentos internos de veículos, forros de portas, tetos, etc.</li>
					<li><strong>Embalagens:</strong> Suportes, displays, proteções para produtos, etc.</li>
					<li><strong>Arte e artesanato:</strong> Corte, moldagem, pintura, etc.</li>
					<li><strong>Projetos de engenharia:</strong> Maquetes arquitetônicas, protótipos, stands de feiras, etc.</li>
					<li><strong>Isolamento térmico e acústico:</strong> Construção, estrutura celular fechada, etc.</li>
				</ul>

			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>