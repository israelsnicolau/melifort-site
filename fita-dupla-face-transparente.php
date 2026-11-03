<?php

define("TITULO", "Fita Dupla Face Transparente");
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
					<div class="col-lg-6">
						<?php include("includes/imagens-dinamicas.php") ?>
					</div>
					<div class="col-lg-6">
						<h3 class="mb-4">
							<?php echo TITULO ?>
						</h3>
						<div class="produto-form">
							<input type="number" name="quantidade" value="1" min="1" max="20" class="form-control">
							<input type="text" name="nome-produto" value="<?php echo TITULO ?>" class="form-control" hidden>
							<button class="btn-send-whatsapp">
								<i class="fab fa-whatsapp"></i>
								&nbsp;
								Chame no Whatsapp
							</button>
						</div>
					</div>
				</div>

			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>