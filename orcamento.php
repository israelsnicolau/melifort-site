<?php

define("TITULO", "Contato");
define("DESCRIPTION", "Entre em contato conosco e envie sua mensagem ou solicitação de orçamento, nossa equipe entrará em contato assim que possível para atendê-lo.");
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
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                        <h2><?php echo TITULO; ?></h2>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                        <?php echo $focus->breadcrumb(array(TITULO)); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="contato-full orcamento">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form id="formulario-orcamento" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" placeholder="Nome: ">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="E-mail: ">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control mask-telefone" name="telefone" placeholder="Telefone: ">
                            </div>
                            <div class="form-group">
                                <select name="como_conheceu" class="form-control">
                                    <option>Como nos conheceu?</option>
                                    <option value="Google">Google</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Outdoor">Outdoor</option>
                                    <option value="Folders">Folders</option>
                                    <option value="Rádio">Rádio</option>
                                    <option value="Websites">Websites</option>
                                    <option value="Outros Canais">Outros Canais</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control" name="arquivos[]" placeholder="Selecione seus arquivos" multiple>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="mensagem" placeholder="Mensagem" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success w-100 btn-envia">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="contato-espace">
                            <h2><?= $config["site"]["nomeSite"]; ?></h2>
                            <p>
                                <strong><i class="fas fa-map-marker-alt"></i> Endereço:</strong> <?= $config["site"]["endereco"]["rua"] . ", " . $config["site"]["endereco"]["bairro"] . ", " . $config["site"]["endereco"]["cidade"] . " - " . $config["site"]["endereco"]["uf"] . ", CEP: " . $config["site"]["endereco"]["cep"]; ?>
                            </p>
                            <hr class="adjust-hr">
                            <p>
                                <strong><i class="fa fa-envelope" aria-hidden="true"></i> E-mail:</strong>
                                <a href="mailto:<?= $config["site"]["emailContato"]["principal"]; ?>" title="E-mail de Contato">
                                    <?= $config["site"]["emailContato"]["principal"]; ?>
                                </a>
                            </p>
                            <hr class="adjust-hr">
                            <p>
                                <strong><i class="fa-solid fa-phone"></i> Telefone de Contato: </strong>
                                <a href="tel:<?= $config["site"]["telefone"]["principal"]; ?>" title="Contato via Telefone" target="_blank">
                                    <?= $config["site"]["telefone"]["principal"]; ?>
                                </a> |
                                <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5511" title="Contato via whatsapp" target="_blank">
                                    <i class="fab fa-whatsapp"></i> (11)
                                </a>
                            </p>
                            <hr class="adjust-hr">
                            <p>
                                <strong><i class="fas fa-clock"></i> Horário de Atendimento: </strong>Seg-Sex: 08:00 – 17:30 e Sab das 08:30-12:00
                            </p>
                            <hr class="adjust-hr">
                            <p>
                                <strong>Siga-nos: </strong> <i class="fab fa-instagram"></i> <a href="https://www.instagram.com/@sitebase" title="Instagram" target="_blank">@empresa</a> | <i class="fab fa-facebook"></i> <a href="https://www.facebook.com/@sitebase">@empresa</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7333.676260523915!2d-47.268672!3d-23.212569!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf4e416c0908ef%3A0x71b3ff0f1f9c571b!2sR.%20Roque%20Lazazera%2C%20121%20-%20Nossa%20Sra.%20do%20Monte%20Serrat%2C%20Salto%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1610974913715!5m2!1spt-BR!2sbr"></iframe>
        </div>
    </main>

    <?php echo $focus->JS(); ?>

    <script>
        $(function() {
            $("#formulario-orcamento").validate({
                errorClass: "invalid-feedback",
                validClass: "valid-feedback",
                rules: {
                    "nome": {
                        required: true
                    },
                    "email": {
                        required: true,
                        email: true
                    },
                    "telefone": {
                        required: true
                    },
                    "mensagem": {
                        required: true
                    }
                },
                highlight: function(element) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function(element) {
                    $(element).addClass("is-valid").removeClass("is-invalid");
                },
                submitHandler: function(form, e) {
                    $(form).ajaxSubmit({
                        type: "POST",
                        url: "includes/dispara-email/dispara-email-orcamento.php",
                        data: $(form).serializeArray(),
                        dataType: "json",
                        beforeSend: function() {
                            $(".btn-envia").html("Aguarde...").attr("disabled", "disabled");
                            $(".form-control").prop("disabled", true);
                            $(".select-form").prop("disabled", true);
                        },
                        success: function(data) {
                            if (data.status) {
                                bootbox.dialog({
                                    message: data.mensagem,
                                    closeButton: false,
                                    buttons: {
                                        success: {
                                            label: "OK",
                                            className: "btn-success w-100 msg-sucesso",
                                            callback: function() {
                                                $(".btn-envia").html("Enviar").removeAttr("disabled");
                                                $(".form-control").prop("disabled", false);
                                                $(".select-form").prop("disabled", false);
                                                $(".form-control").removeClass("is-valid");
                                                $("#formulario-contato")[0].reset();
                                            },
                                        },
                                    },
                                });
                            } else {
                                bootbox.dialog({
                                    title: "Ocorreu um erro!",
                                    message: data.mensagem,
                                    closeButton: false,
                                    buttons: {
                                        success: {
                                            label: "Ok",
                                            className: "btn-warning w-100",
                                            callback: function() {
                                                $(".btn-envia").html("Enviar").removeAttr("disabled");
                                                $(".form-control").prop("disabled", false);
                                                $(".select-form").prop("disabled", false);
                                            },
                                        },
                                    },
                                });
                            }
                        },
                        error: function() {
                            bootbox.dialog({
                                title: "Ocorreu um erro",
                                message: "Infelizmente ocorreu um erro, tente mais tarde novamente.",
                                closeButton: false,
                                buttons: {
                                    success: {
                                        label: "Ok",
                                        className: "btn-warning w-100",
                                        callback: function() {
                                            $(".btn-envia").html("Enviar").removeAttr("disabled");
                                            $(".form-control").prop("disabled", false);
                                            $(".select-form").prop("disabled", false);
                                        },
                                    },
                                },
                            });
                        },
                    });
                    e.preventDefault();
                }
            });
        });
    </script>


    <?php require 'includes/footer.php'; ?>

</body>

</html>