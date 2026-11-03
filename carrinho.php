<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define("TITULO", "Carrinho");
define("DESCRIPTION", "Nós trabalhamos desde 1998 com máquinas a laser para gravação, solda a laser  e corte a laser, a nossa equipe pode dimensionar o melhor equipamento para que você tenha uma produtividade inigualável.");
define("KEYWORDS", "");

require 'includes/funcoes.php';
require 'includes/head.php';


echo $focus->CSS();

?>
</head>

<?php echo '<pre>';
print_r($_SESSION["carrinho"]);
echo '</pre>';
?>

<body>

	<?php require 'includes/topo.php'; ?>

	<main>

		<div class="faixa-pgs">
			<div class="container">
				<h2><?php echo TITULO; ?></h2>
				<?php echo $focus->breadcrumb(array(TITULO)); ?>
			</div>
		</div>


		<div class="default carrinho">
			<div class="container">
				<?php if (count($_SESSION["carrinho"]) > 0) { ?>
					<div class="row" style="gap: 30px 0px;">
						<div class="col-lg-7 col-md-6 col-sm-12">
							<h4>
								Seu Carrinho
							</h4>
							<div class="table-responsive">
								<table class="table">

									<thead>
										<tr>
											<th>
												<strong>#</strong>
											</th>
											<th>
												&nbsp;
											</th>
											<th>
												<strong>Nome</strong>
											</th>

											<th>
												<strong>Qtd.</strong>
											</th>
											<th>
												&nbsp; - &nbsp;
											</th>
										</tr>
									</thead>

									<tbody>
										<?php
										$index = 1;
										foreach (Carrinho::getAll() as $key => $item) { ?>
											<tr>
												<td>
													<?= $index ?>
												</td>
												<td style="width: 100px !important;">
													<div class="carrinho__item-image">
														<img src=" <?= URL_IMAGENS . "produtos/" . $item["id"] . ".jpg" ?>" alt="<?php echo TITULO ?>">
													</div>
												</td>
												<td class="carrinho__item-title">
													<a href="<?php echo URL . $item["id"] ?>" title="<?php echo $item["nome"] ?>">
														<?= $item["nome"] ?>
													</a>

												</td>
												<td>
													<?= $item["quantidade"] ?>
												</td>

											</tr>
										<?php
											$index++;
										} ?>
									</tbody>

								</table>
							</div>
							<button class="btn-clearAll-cart">
								<i class="fas fa-trash-alt"></i>
								&nbsp;
								Limpar carrinho
							</button>
						</div>
						<div class="col-lg-5 col-md-6 col-sm-12">
							<h4>
								Formulário
							</h4>
							<form id="form-orcamento">
								<div class="form-group">
									<input type="text" class="form-control" name="nome" placeholder="Nome: ">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="email" placeholder="E-mail: ">
								</div>
								<div class="form-group">
									<input type="text" class="form-control mask-telefone" name="telefone" placeholder="Telefone: ">
								</div>
								<div class="form-group">
									<textarea placeholder="Observação" class="form-control" name="observacao" id="" cols="30" rows="9"></textarea>
								</div>
								<button class="btn-send-orcamento">
									Enviar orçamento
								</button>
							</form>
						</div>
					</div>
				<?php } else { ?>

					<div class="empty">
						<p>
							Seu carrinho está vazio.
							Veja nossas <a href="<?= URL . "maquinas-corte-gravacao-e-solda-a-laser" ?>">máquinas</a>
						</p>
					</div>

				<?php } ?>

			</div>
		</div>

	</main>

	<?php echo $focus->JS(); ?>
	<?php require 'includes/footer.php'; ?>

	<script>
		$("#form-orcamento").validate({
			errorClass: "invalid-feedback",
			validClass: "valid-feedback",
			rules: {
				nome: {
					required: true,
				},
				email: {
					required: true,
					email: true,
				},
				telefone: {
					required: true,
				},
			},
			highlight: function(element) {
				$(element).addClass("is-invalid").removeClass("is-valid");
			},
			unhighlight: function(element) {
				$(element).addClass("is-valid").removeClass("is-invalid");
			},
			submitHandler: function(form, e) {

				$.ajax({
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
											$("#form-orcamento")[0].reset();
											$("#exampleModal").modal("hide");
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
			},
		});
	</script>

</body>

</html>