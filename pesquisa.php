<?php

if (empty($_POST["search"])) {
	header("Location: " . URL);
	exit;
}

define("TITULO", "Pesquisa");
define("DESCRIPTION", "Abaixo os resultados");
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

		<div class="pesquisa default">
			<div class="container">
				<?php $array_resultado = $focus->FilterInArray(($_POST["search"]), $produtos); ?>
				<h5 class="default__mini-title">
					Buscando por: <em><?php echo $_POST["search"] ?></em>
				</h5>
				<?php if (empty($array_resultado)) { ?>
					<p>
						Nenhum resultado foi encontrado.
					</p>
				<?php } else { ?>
					<p class="mb-3">
						<?php echo count($array_resultado) . " resultados" ?>
					</p>
					<div class="row" style="gap:30px 0px;">
						<?php foreach ($array_resultado as $key => $value) { ?>
							<div class="col-lg-3">
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
				<?php } ?>
			</div>
		</div>


	</main>

	<?php echo $focus->JS(); ?>
	<?php require 'includes/footer.php'; ?>

</body>

</html>