<?php

define("TITULO", "Painel Ripado WPC");
define("DESCRIPTION", "Painel ripado WPC na Melifort: alta resistência, isolamento térmico e acústico, instalação simples e sustentável. Ideal para paredes e painéis de TV.");
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
				<p>Ideal para salas, quartos, escritórios, lojas e áreas comerciais, o painel ripado pode ser usado em paredes inteiras ou detalhes decorativos, valorizando o ambiente com elegância e modernidade.</p>
				<p>A instalação é simples, rápida e limpa, feita através do sistema de encaixe lateral entre as placas e fixada na parede com cola/silicone ou fita dupla face, sem necessidade de mão de obra especializada.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>Largura: 165mm</li>
					<li>Comprimento: 2900mm</li>
					<li>Espessura: 10mm</li>
				</ul>
				<p><strong>Benefícios e Durabilidade</strong></p>
				<ul>
					<li>Alta resistência: imune a cupins, fungos, mofo e corrosão. Não apodrece.</li>
					<li>Conforto: auxilia no isolamento térmico e acústico.</li>
					<li>Sustentável: produzido com material reciclado e não requer pintura ou verniz.</li>
					<li>Seguro e durável: impermeável, resistente à umidade e não propaga chamas.</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Paredes e painéis de TV</li>
					<li>Cabeceiras</li>
					<li>Divisórias</li>
					<li>Detalhes arquitetônicos</li>
				</ul>
				<p><strong>Instalação</strong>: sistema de encaixe lateral entre as placas, fixado na parede com cola de P.U, silicone ou fita dupla face.</p>

				<p><strong>Cores</strong></p>
				<p>
					Carvalho Claro, Nogueira, Mogno, Cinza
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
