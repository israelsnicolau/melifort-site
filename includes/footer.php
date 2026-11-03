<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="form-catalogo">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Acesse nosso catálogo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="Nome: " value="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="E-mail: " value="">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary btn-envia">Download</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
  window.URL_CATALOGO_PDF = "<?php echo URL_ARQUIVOS ?>catalogo-melifort.pdf";
</script>

<div class="modal fade" id="Carrinho" tabindex="-1" aria-labelledby="CarrinhoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="form-catalogo">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="CarrinhoLabel">Produtos Inserido no carrinho!</h5>
        </div>
        <div class="modal-footer">
          <a href="<?php echo URL . "produtos" ?>" class="btn btn-secondary py-2">Adicionar mais produtos</a>
          <a href="<?php echo URL . "cotacao" ?>" class="btn btn-primary btn-envia">Finalizar Cotação</a>
        </div>
      </div>
    </form>
  </div>
</div>

<footer class="footer">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="footer-box">
          <a href="<?php echo URL ?>" class="footer-logo">
            <img src="<?php echo URL_IMAGENS . "logo-2.png" ?>" alt="Melifort">
          </a>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <div class="footer-box">
          <h6>
            Institucional
          </h6>
          <ul class="footer__list">
            <li><a href="<?php echo URL ?>" title="Home">Home</a></li>
            <li><a href="<?php echo URL  . "produtos" ?>" title="Produtos">Produtos</a></li>
            <li><a href="<?php echo URL  . "contato" ?>" title="Contato">Contato</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-3 col-sm-6">
        <div class="footer-box">
          <h6>
            Informações
          </h6>
          <p class="mb-1">
            <i class="fas fa-envelope"></i>
            &nbsp;
            <a href="mailto:contato@melifort.com.br">
              contato@melifort.com.br
            </a>
          </p>
          <p class="mb-1">
            <i class="fas fa-phone"></i>
            &nbsp;
            <a href="tel:551120847726">
              (11) 2084-7726
            </a>
          </p>
          <p class="mb-1">
            <i class="fab fa-whatsapp"></i>
            &nbsp;
            <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5511937387748&text=Ol%C3%A1,%20encontrei%20voc%C3%AAs%20no%20Google.%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es.">
              (11) 93738-7748
            </a>
          </p>
          <p class="mb-0">
            <i class="fas fa-clock"></i>
            &nbsp;
            Segunda a sexta 08:00 às 18:00
          </p>
          <p>
            <i class="fas fa-clock"></i>
            &nbsp;
            Sábado às 08:00 às 12:00
          </p>
        </div>
      </div>

      <div class="col-lg-2 col-md-2">
        <a href="https://transparencyreport.google.com/safe-browsing/search?url=https:%2F%2Fwww.MELIFORT.com.br%2F" target="_blank">
          <img src="<?php echo URL_IMAGENS . "seguranca.png" ?>" alt="Verificado Pelo Google">
        </a>
      </div>
    </div>
    <p class="text-center mb-0 prop-empresa">
      Melifort comércio e distribuição de plásticos Ltda
      &nbsp; | &nbsp;
      CNPJ: 32.400.272/0001-75
      &nbsp; | &nbsp;
      Endereço: Rua Padre João Álvares, 667 - Vila Renata, Guarulhos - SP, 07056-000
    </p>
    <div class="creditos">
      <div class="creditos-box">
        <div class="creditos-logo">
          <a href="<?php echo $config["creditos"]["link"]; ?>" target="_blank"><img class="logo-ultramize" src="<?php echo URL_IMAGENS ?>creditos/ultramize.png" alt="Logo da empresa Ultramize"></a>
        </div>
        <div class="creditos-text">
          <small>&copy; Desenvolvido pela <strong><a href="http://www.ultramize.com.br" title="Conheça a Ultramize!" target="_blank">www.ultramize.com.br</a></strong>.</small>
        </div>
        <div class="creditos-link">
          <a href="https://validator.w3.org/check?uri=<?php echo CANONICAL; ?>" target="_blank"><img src="<?php echo URL_IMAGENS ?>creditos/logo-html5.png" alt="html5" style="width: 20px;"></a>
          <a href="https://jigsaw.w3.org/css-validator/validator?uri=<?php echo CANONICAL; ?>" target="_blank"><img src="<?php echo URL_IMAGENS ?>creditos/logo-css3.png" alt="css3" style="width: 20px;"></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="menu-lateral" data-menu-lateral>
  <div class="menu-lateral-conteudo" data-menu-lateral-conteudo></div>
  <div data-menu class="menu-lateral-overlay"></div>
</div>

<div class="barra-footer">
  <a href="tel:551120847726" title="Telefone de Contato"> <i class="fa-solid fa-phone"></i></a>
  <a href="https://wa.me/<?= $config["site"]["whatsapp"]["numero"]; ?>?text=Olá,%20encontrei%20vocês%20no%20Google.%20Gostaria%20de%20mais%20informações." title="Contato via WhatsApp"><i class="fab fa-whatsapp"></i></a>
  <a href="mailto:<?= $config["site"]["emailContato"]["principal"]; ?>" title="Contato via E-mail"><i class="fa fa-envelope"></i></a>
</div>

<script>
  (function(a, b, c, d) {
    try {
      var e = b.head || b.getElementsByTagName("head")[0];
      var f = b.createElement("script");
      f.setAttribute("src", c);
      f.setAttribute("charset", "UTF-8");
      f.defer = true;
      a.neuroleadId = d;
      e.appendChild(f)
    } catch (g) {}
  })(window, document, "https://cdn.leadster.com.br/neurolead/neurolead.min.js", "FcSaqLCDyPwqTYW6LY8LlDwQn")
</script>

<!-- Cookies -->
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#363636",
        "text": "#ffffff"
      },
      "button": {
        "background": "#000",
        "text": "#ffffff"
      }
    },
    "theme": "classic",
    "content": {
      "message": "Este site armazena dados como cookies para habilitar funcionalidades essenciais do site, bem como marketing, personalização e análises.",
      "dismiss": "Aceitar!",
      "link": "Política de Cookies",
      "href": "<?php echo URL ?>politica-de-privacidade"
    }
  });
</script>

<!--
<?php if ($_SERVER["SERVER_NAME"] == "localhost") { ?>
	<script>
		$(function() {
			focus.verificaSEO();
		});
	</script>
<?php } ?> -->