<?php 
define("TITULO", ""); 
require_once "funcoes.php";
?>


<?php if ($config['site']['whatsapp']['faixaInformacoesAtivo']) { ?>
  <div class="faixa-informacoes">
    <div class="row align-items-center">
      <div class="col-lg-6 col-sm-12 col-xs-12">
        <h2>Solicite um orçamento!</h2>
      </div>
      <div class="col-lg-6 col-sm-12 col-xs-12">
        <div class="btn-whatsapp">
          <a href="https://api.whatsapp.com/send?1=pt_BR&amp;phone=<?= $config['site']['whatsapp']['numero']; ?>&text=Olá,%20encontrei%20vocês%20no%20Google.%20Gostaria%20de%20mais%20informações." title="Contato Via WhatsApp" target="_blank">
            Entre em contato <i class="fab fa-whatsapp"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
<?php } ?>