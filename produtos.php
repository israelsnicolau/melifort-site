<?php

define("TITULO", "Produtos");
define("DESCRIPTION", "Em nosso página de produtos você encontra diversos produtos e serviços, confira nossas categorias e informações de nossos produtos e serviços.");
define("KEYWORDS", "");

require 'includes/funcoes.php';
require 'includes/head.php';

echo $focus->CSS();

?>
</head>

<body>

	<?php require 'includes/topo.php'; ?>

	<main>

		<div class="faixa-pgs">
			<div class="container">
				<div class="faixa-pgs__content">
					<?php echo $focus->breadcrumb([TITULO]) ?>
					<h1>
						<?php echo TITULO ?>
					</h1>
				</div>
			</div>
		</div>

		<div class="conteudo-informacoes">
			<div class="container">

				<div class="row" style="gap: 40px 0px;">

					<?php foreach ($produtos as $key => $value) { ?>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<a href="<?php echo URL . $key ?>" class="produto-card">
								<div class="produto-card__image">
									<img src="<?php echo URL_IMAGENS . "produtos/" . $key . "/thumb/1.png" ?>" alt="<?= $value ?>">
								</div>
								<div class="produto-card__body">
									<h5>
										<?= $value ?>
									</h5>
								</div>
							</a>
						</div>
					<?php } ?>

				</div>

			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>