<?php

define("TITULO", "Fita Porosa");
define("DESCRIPTION", "Fita porosa para policarbonato alveolar na Melifort: ventilação dos alvéolos, proteção contra poeira e insetos e auxílio na drenagem da umidade.");
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
				<p>A Fita Porosa é utilizada na vedação ventilada das extremidades dos alvéolos das chapas de policarbonato alveolar. Sua membrana permeável ao vapor auxilia a ventilação e a drenagem da umidade interna, ao mesmo tempo em que reduz a entrada de poeira, insetos e detritos. A aplicação correta contribui para preservar a limpeza interna dos alvéolos e o desempenho da cobertura.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>Largura: 25mm, 32mm, 50mm, 105mm e 210mm (conforme largura da chapa)</li>
					<li>Comprimento por rolo: 25m a 50m</li>
					<li>Compatível com chapas alveolares de 4mm, 6mm e 10mm de espessura</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Reduz a entrada de insetos, poeira e detritos nos alvéolos</li>
					<li>Permite ventilação e saída de vapor d'água</li>
					<li>Auxilia na redução do acúmulo de condensação nos alvéolos</li>
					<li>Autoadesiva — aplicação simples e rápida</li>
					<li>Permite o funcionamento adequado da extremidade ventilada da chapa</li>
					<li>Compatível com chapas alveolares nas espessuras e larguras indicadas, conforme o dimensionamento da fita</li>
					<li>Indicada para aplicações em policarbonato alveolar, conforme orientação de instalação</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Coberturas e telhados com chapa de policarbonato alveolar</li>
					<li>Pergolados residenciais e comerciais</li>
					<li>Estufas agrícolas e jardins de inverno</li>
					<li>Fechamento ventilado da borda inferior da chapa</li>
					<li>Proteção das extremidades alveolares que necessitam ventilação e drenagem</li>
					<li>Instalações em galpões e quadras cobertas</li>
				</ul>

				<p><strong>Dica Técnica de Instalação:</strong> recomenda-se utilizar fita porosa na borda inferior da chapa, permitindo ventilação e drenagem, e fita aluminizada sólida na borda superior, promovendo a vedação contra a entrada direta de água e sujeira. A largura da fita deve ser compatível com a espessura e a configuração da chapa utilizada.</p>

				<p><strong>Cores</strong></p>
				<p>
					Branco (padrão)
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
