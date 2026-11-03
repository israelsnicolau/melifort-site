<?php

define("TITULO", "Trilho");
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

				<p>O trilho para aplicação de cortina de PVC oferece uma solução versátil e eficaz para a instalação de cortinas em ambientes comerciais e residenciais. Substituindo métodos de instalação convencionais, o trilho proporciona uma montagem simples e segura, garantindo um deslizamento suave das cortinas.</p>
				<p>Ele é ideal para fixar cortinas de PVC em diversas superfícies, como paredes e tetos, proporcionando praticidade e durabilidade.</p>

				<p><strong>Dimensões</strong></p>
				<ul>
					<li>1m</li>
					<li>1,2m</li>
				</ul>
				<p><strong>Benefícios</strong></p>
				<ul>
					<li>Instalação Simples e Segura</li>
					<li>Deslizamento Suave das Cortinas</li>
					<li>Durabilidade</li>
					<li>Resistência a Impactos</li>
					<li>Praticidade de Uso</li>
					<li>Compatibilidade com Diversas Superfícies</li>
				</ul>
				<p><strong>Aplicações</strong></p>
				<ul>
					<li>Ambientes Comerciais e industriais</li>
					<li>Hospitais e Clínicas</li>
					<li>Divisórias de Ambientes</li>
					<li>Frigoríficos</li>
					<li>Bares e restaurantes</li>
					<li>Açougues</li>
					<li>Mercados</li>
				</ul>

			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const produtos = <?php echo json_encode($lista_produtos[URL_ATUAL]); ?>;
			console.log(produtos);
			const espessuraSelect = document.getElementById("dimensoes");
			const coresContainer = document.getElementById("cores-container");
			const valorDiv = document.getElementById("valor");

			function atualizarCores() {
				const espessuraSelecionada = espessuraSelect.value;
				coresContainer.innerHTML = "";

				const produto = produtos.find(produto => produto.espessura === espessuraSelecionada);
				if (produto && produto.cores) {
					const cores = produto.cores.split(" | ");
					cores.forEach(cor => {
						const label = document.createElement("label");
						const radio = document.createElement("input");
						radio.type = "radio";
						radio.name = "cor";
						radio.value = cor;
						radio.addEventListener("change", atualizarValor);
						label.appendChild(radio);
						label.appendChild(document.createTextNode(cor));
						coresContainer.appendChild(label);
						coresContainer.appendChild(document.createElement("br"));
					});
				}
			}

			function atualizarValor() {
				const espessuraSelecionada = espessuraSelect.value;
				const corSelecionada = document.querySelector('input[name="cor"]:checked');

				const produto = produtos.find(produto => produto.espessura === espessuraSelecionada && produto.cores.includes(corSelecionada.value));
				if (produto) {
					valorDiv.textContent = "Valor: " + produto.valor;
				}
			}

			espessuraSelect.addEventListener("change", atualizarCores);

			atualizarCores();
		});
	</script>
</body>

</html>