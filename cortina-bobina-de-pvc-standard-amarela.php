<?php

define("TITULO", "Cortina Bobina De Pvc Standard Amarela");
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
						<?php include("includes/opcoes-produto.php") ?>
					</div>
				</div>
				<hr>
				<h3>
					Descrição
				</h3>
				<p> A cortina bobina de PVC Flexível Stop-Insect é repelente a mais de 80% dos mosquitos e tem efeito devastador aos insetos que são atraídos por ambientes de produção. Ele mata 100% dos insetos que tocam o material durante um período de 12 meses. O STOP-INSECT ajuda a repelir aranhas, carrapatos, larvas, ácaros e ácaros da sarna e impedir a infiltração em áreas como escolas, hospitais, centros de saúde, fábricas, indústrias alimentícias, mercados, frigoríficos, açougues</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>Espessura 2mm e 3mm</li>
					<li>Largura: 200mm e 300mm</li>
					<li>Comprimento: 10 á 50 metros</li>
				</ul>

				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Atóxico com citronela</li>
					<li>Repele insetos</li>
					<li>Resistente à Ação de Fungos, Bactérias, Insetos e Roedores</li>
					<li>Mata 100% dos mosquitos que tem contato com o material</li>
					<li>Não Propaga Chamas</li>
					<li>Matéria prima 100 % virgem</li>
				</ul>

				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Mercados</li>
					<li>Açougues</li>
					<li>Frigoríficos</li>
					<li>Indústrias</li>
					<li>Hospitais</li>
					<li>Escolas</li>
					<li>Alimentício</li>
				</ul>

				<p>Cores</p>
				<p>
					Amarela
				</p>

			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>