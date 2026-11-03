<?php

define("TITULO", "Fita Dupla Face Para Carpete");
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

				<p>A Fita Dupla Face de papel Melifort é a solução ideal para fixar carpetes com segurança e praticidade. Com suas duas faces adesivas compostas por um papel especial tratado, oferece uma fixação resistente tanto para o carpete quanto para o chão. Sua adesividade balanceada proporciona uma fixação suave no carpete e firmeza no solo, garantindo uma instalação segura e duradoura.</p>
				<p>Com a Fita Dupla Face de papel Melifort, você pode fixar o carpete firmemente, sem se preocupar com pontas soltas. E, quando precisar remover o carpete, a fita permite uma remoção limpa e fácil, sem deixar resíduos de adesivo ou papel no chão</p>

				<p><strong>Dimensões</strong></p>
				<li>38mm x 30m</li>
				<li>48cm x 30m</li>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Aplicação Simples e Eficiente</li>
					<li>Fixação Segura</li>
					<li>Prolonga a Vida Útil dos Carpetes</li>
					<li>Estabilidade</li>
					<li>Segurança</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Ambientes Residenciais e Comerciais</li>
					<li>Fixação de Carpetes especiais em Diversos Pisos</li>
					<li>Substituição de Métodos de Fixação Convencionais</li>
					<li>Tapetes de casamento</li>
					<li>Tapetes em festas</li>
					<li>Carpetes novos e antigos</li>
				</ul>


			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>