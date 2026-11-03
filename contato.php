<?php

define("TITULO", "Contato");
define("DESCRIPTION", "Entre em contato conosco e envie sua mensagem ou solicitação de orçamento, nossa equipe entrará em contato assim que possível para atendê-lo.");
define("KEYWORDS", "");

require 'includes/funcoes.php';
require 'includes/head.php';

echo $focus->CSS();

?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
		<div class="contato-full">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<h2>
							Entre em contato
						</h2>
						<div class="formulario-content">
							<form id="formulario-contato">

								<div class="form-group">
									<input type="text" class="form-control" name="nome" placeholder="Nome: " value="">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="email" placeholder="E-mail: " value="">
								</div>
								<div class="form-group">
									<input type="tel" class="form-control mask-telefone" name="telefone" placeholder="Telefone: " value="">
								</div>

								<div class="form-group">
									<select name="como_conheceu" class="form-control">
										<option>Como nos conheceu?</option>
										<option value="Instagram">Instagram</option>
										<option value="indicação">indicação</option>
										<option value="Linkedin">Linkedin</option>
										<option value="Facebook">Facebook</option>
										<option value="Google">Google</option>
										<option value="Feira/Evento">Feira/Evento</option>
										<option value="Mercado Livre">Mercado Livre</option>
										<option value="Amazon">Amazon</option>
										<option value="Shoope">Shoope</option>
										<option value="Portais Industriais">Portais Industriais</option>
										<option value="Trabalhe Conosco">Trabalhe Conosco</option>
										<option value="Reclamação">Reclamação</option>
										<option value="Sugestão">Sugestão</option>
									</select>

								</div>
								<div class="form-group">
									<textarea class="form-control" name="mensagem" placeholder="Mensagem" rows="4"></textarea>
								</div>
								<div class="g-recaptcha mb-3" data-sitekey="6LeYnCQqAAAAAPbJeeETsky2FplYjExbJoCW9mNG"></div>
								<div class="form-group">
									<button type="submit" class="btn-envia">Enviar</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<h2>
							Informações para contato
						</h2>
						<p class="mb-2">
							<i class="fas fa-phone"></i> &nbsp; <a href="tel:551120847726">(11) 2084-7726</a>
						</p>
						<p class="mb-2">
							<i class="fab fa-whatsapp"></i> &nbsp; <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5511937387748&text=Ol%C3%A1,%20encontrei%20voc%C3%AAs%20no%20Google.%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es." target="_blank">(11) 93738-7748</a>
						</p>
						<p class="mb-2"><i class="fas fa-envelope"></i> &nbsp; <a href="mailto:contato@melifort.com.br">contato@melifort.com.br</a></p>
						<div class="iframe">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.924037323205!2d-46.566063199999995!3d-23.463204400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef5bc9081c1b3%3A0x2a1df281135a3924!2sR.%20Padre%20Jo%C3%A3o%20%C3%81lvares%2C%20667%20-%20Vila%20Renata%2C%20Guarulhos%20-%20SP%2C%2007056-000!5e0!3m2!1spt-BR!2sbr!4v1747731522771!5m2!1spt-BR!2sbr"></iframe>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<?php echo $focus->JS(); ?>

	<script>
		$(function() {
			$("#formulario-contato").validate({
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
					},
					"g-recaptcha-response": {
						required: true
					}
				},
				highlight: function(element) {
					$(element).addClass("is-invalid").removeClass("is-valid");
				},
				unhighlight: function(element) {
					$(element).addClass("is-valid").removeClass("is-invalid");
				},
				errorPlacement: function(error, element) {
					if (element.attr("name") == "g-recaptcha-response") {
						error.insertAfter(".g-recaptcha");
					} else {
						error.insertAfter(element);
					}
				},
				submitHandler: function(form, e) {
					var response = grecaptcha.getResponse();
					if (response.length === 0) {
						$(".g-recaptcha").addClass("is-invalid");
						alert("Por favor, complete o reCAPTCHA.");
					} else {
						$(".g-recaptcha").removeClass("is-invalid");
						$.ajax({
							type: "POST",
							url: "includes/dispara-email/dispara-email-contato.php",
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
												}
											}
										}
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
												}
											}
										}
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
											}
										}
									}
								});
							}
						});
					}
					e.preventDefault();
				}
			});
		});
	</script>

	<?php require 'includes/footer.php'; ?>

</body>

</html>