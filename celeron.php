<?php

define("TITULO", "Celeron");
define("DESCRIPTION", "Chapas de Celeron na Melifort: laminado de tecido de algodão com resina fenólica, boa resistência mecânica, isolação elétrica e usinabilidade. Guarulhos/SP.");
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
				<p>O Celeron é um laminado termorrígido produzido com tecido de algodão impregnado com resina fenólica e prensado sob temperatura e pressão controladas. Combina boa resistência mecânica, resistência ao impacto, baixo atrito em determinadas aplicações e boas propriedades de isolação elétrica. Sua tenacidade e maquinabilidade favorecem o uso em engrenagens, buchas, guias e componentes isolantes.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>Espessuras: 1,5mm a 50mm</li>
					<li>Largura: 1000mm</li>
					<li>Comprimento: 2000mm</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Boa resistência mecânica e ao impacto</li>
					<li>Boa resistência à compressão</li>
					<li>Boa maquinabilidade — permite furação, torneamento e fresamento</li>
					<li>Boas propriedades de isolação elétrica, conforme o grau</li>
					<li>Boa resistência a óleos e lubrificantes em aplicações compatíveis</li>
					<li>Disponível em diferentes graus e construções, conforme especificação do fabricante</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Engrenagens e cremalheiras em cargas moderadas</li>
					<li>Buchas e mancais de baixa velocidade</li>
					<li>Peças estruturais e isolantes em equipamentos elétricos</li>
					<li>Suportes, guias e espaçadores</li>
					<li>Componentes de máquinas têxteis</li>
					<li>Polias, roletes e gabaritos de usinagem</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>
					Marrom (natural)
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
