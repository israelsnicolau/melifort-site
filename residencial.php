<?php

define("TITULO", "Residêncial");
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

		<div class="categoria default mb-5">
			<div class="container">

				<div class="row" style="gap: 40px 0px;">

					<?php foreach ($residencial as $key => $value) { ?>
						<div class="col-lg-3 col-md-6 co-sm-6">
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