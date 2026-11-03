<?php

define("TITULO", "Sobre Nós");
define("DESCRIPTION", "Nosso compromisso com a excelência se reflete em nossa ampla gama de produtos, que incluem o aclamado Acrílico Colorido e Acrílico Cristal, perfeitos para uma variedade...");
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

    <div class="empresa default">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <p>Melifort Plásticos nasceu com a vontade de fazer o simples bem feito! Nosso objetivo é entregar uma experiência única e agradável a nossos clientes.</p>
            <p>Temos a certeza de que nossos clientes serão sempre muito bem atendidos através de uma empresa humana e tecnológica.</p>
            <p>Na Melifort, acreditamos que as relações comerciais devem ser de forma agradável e eficiente são essenciais para atender as necessidades do mercado atual. Por isso, estamos em constante evolução e melhoria de nossos processos, garantindo uma experiência de compra ágil, flexível e única para nossos clientes.</p>

          </div>
          <div class="col-lg-5">
            <div class="empresa__image"><img src="<?php echo URL_IMAGENS . "empresa.png" ?>" alt="Melifort"></div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <?php echo $focus->JS(); ?>

  <?php require 'includes/footer.php'; ?>

</body>

</html>