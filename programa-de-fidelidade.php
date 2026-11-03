<?php

define("TITULO", "Programa De Fidelidade
");
define("DESCRIPTION", "Dê vida aos seus projetos com " . TITULO .  " da Melifort: versátil, vibrante e de qualidade superior. Transforme sua criatividade em realidade!");
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

		<div class="conteudo default">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h2>Bem-vindo ao Mundo Melifort!</h2>
						<p>Em um mundo moderno e ágil, sabemos que nossos clientes merecem o melhor atendimento e os melhores benefícios. Por isso, estamos lançando o Programa de Fidelidade Melifort, uma iniciativa exclusiva que se destaca ao premiar nossos clientes mais fiéis com vantagens especiais.</p>
						<p>Benefícios do Programa de Fidelidade Melifort:</p>
						<p><strong>Descontos Exclusivos</strong>: Quanto mais você compra, mais você economiza. Clientes fiéis ganham acesso a descontos especiais em nossos produtos.</p>
						<p><strong>Frete Grátis</strong>: Aproveite a comodidade do frete grátis em seus pedidos, exclusivo para os membros do programa.</p>
						<p><strong>Parcelamento Diferenciado</strong>: Facilite seu fluxo de caixa com opções de parcelamento especiais, exclusivas para nossos clientes do programa.</p>
						<p><strong>Entrega Prioritária</strong>: Receba seus pedidos no mesmo dia com rapidez e agilidade, com prioridade na logística para os membros do programa de fidelidade.</p>
						<p><strong>Entrega aos Finais de Semana</strong>: Receba suas entregas com mais flexibilidade, incluindo a opção de entrega aos sábados e domingos.</p>
						<p><strong>Corte de Materiais Sem Custo</strong>: Beneficie-se do serviço de corte de materiais sem custo adicional, ajustando nossos produtos exatamente às suas necessidades.</p>
						<a target="_blank" href="https://api.whatsapp.com/send?1=pt_BR&phone=5511937387748&text=Ol%C3%A1,%20encontrei%20voc%C3%AAs%20no%20Google.%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="zap pulse">
							CLIQUE AQUI PARA PARTICIPAR
							<i class="fab fa-whatsapp"></i>
						</a>
					</div>
					<div class="col-lg-6">
						<img src="<?php echo URL_IMAGENS . "fidelidade.png" ?>" alt="<?php echo TITULO ?>">
					</div>
				</div>
			</div>
		</div>

	</main>

	<?php echo $focus->JS(); ?>

	<?php require 'includes/footer.php'; ?>

</body>

</html>