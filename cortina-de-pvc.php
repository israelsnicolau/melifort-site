<?php

define("TITULO", "Cortina de PVC ");
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

				<hr>
				<h3>
					Descrição
				</h3>

				<p>Cortinas bobinas de PVC Cristal Standard: A Solução Ideal para Separação de Ambientes</p>
				<p>As cortinas de PVC Standard são a escolha perfeita para a separação de áreas com temperatura ambiente. Projetadas para impedir a entrada de sujeira, gases e fumaça, elas garantem um ambiente mais limpo e seguro.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>Espessura 2mm e 3mm</li>
					<li>Largura: 200mm e 300mm</li>
					<li>Comprimento: 10 á 50 metros</li>
				</ul>

				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Claridade e Brilho</li>
					<li>Não Propaga Chamas</li>
					<li>Flexibilidade</li>
					<li>Isolamento Térmico</li>
					<li>Isolamento Acústico</li>
					<li>Longa Durabilidade</li>
					<li>Resistencia a impacto e riscos</li>
				</ul>


				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Mercados</li>
					<li>Açougues</li>
					<li>Frigoríficos</li>
					<li>Indústrias</li>
					<li>Hospitais</li>
					<li>Escolas</li>
					<li>Caminhões refrigerados</li>
				</ul>

				<p><strong>Cores</strong></p>
				<p>Cristal, Azul, vermelho, Amarelo, Cinza, Branco opaco</p>


			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>