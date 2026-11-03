<?php

define("TITULO", "Página não encontrada...");
define("DESCRIPTION", "Página não encontrada.");
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
		<div class="erro-404">
			<div class="container">
				<div class="alert alert-danger" role="alert">
					<h2>Página não encontrada...</h2>
					<h3>Pedimos desculpas pelo ocorrido.</h3>
					<p>Em 15 segundos você será redirecionado para página inicial!</p>
				</div>
			</div>
		</div>
	</main>


	<?php echo $focus->JS(); ?>

	<script>
		setTimeout(function() {
			$(location).attr('href', '');
		}, 15000);
	</script>

	<?php require 'includes/footer.php'; ?>

</body>

</html>