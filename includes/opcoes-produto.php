<?php $eh_forma = array_key_exists("chapa", $lista_produtos[URL_ATUAL]) || array_key_exists("tarugo", $lista_produtos[URL_ATUAL]); ?>
<?php if ($eh_forma) { ?>
	<?php $forma_inicial = array_key_exists("chapa", $lista_produtos[URL_ATUAL]) ? "chapa" : "tarugo"; ?>
	<div class="produto-prop">
		<input type="hidden" id="key" name="key" value="<?php echo URL_ATUAL ?>">
		<input type="hidden" id="nome" name="nome" value="<?php echo TITULO ?>">
		<div class="mb-3">
			<p>Escolha a forma:</p>
			<div class="produto-prop__forma">
				<?php if (array_key_exists("chapa", $lista_produtos[URL_ATUAL])) { ?>
					<label class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="forma" value="chapa" checked> Chapa
					</label>
				<?php } ?>
				<?php if (array_key_exists("tarugo", $lista_produtos[URL_ATUAL])) { ?>
					<label class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="forma" value="tarugo"> Tarugo
					</label>
				<?php } ?>
			</div>
		</div>
		<hr>
		<div class="mb-3">
			<p>Escolha a espessura:</p>
			<select name="espessuras" id="espessuras" onchange="buscarTamanhos(this,0)">
				<?php foreach ($lista_produtos[URL_ATUAL][$forma_inicial] as $key => $produto) { ?>
					<option value="<?= $key ?>">
						<?= $produto["espessura"] ?>
					</option>
				<?php } ?>
			</select>
		</div>
		<hr>
		<div class="produto-prop__tamanhos d-none">
			<div class="mb-3">
				<p>
					Escolha um tamanho:
				</p>
				<select name="tamanhos" id="tamanhos" onchange="buscarCores(this)"></select>
			</div>
		</div>
		<div class="produto-prop__cores d-none">
			<div class="mb-3">
				<div class="row">
					<div class="col-lg-6">
						<p>
							Escolha uma cor:
						</p>
						<select name="cores" id="cores"></select>
					</div>
					<div class="col-lg-6">
						<p>
							Escolha a Quantidade:
						</p>
						<input type="number" name="quantidade" id="quantidade" value="1" min="1" max="99">
					</div>
				</div>
			</div>
			<button type="button" class="btn-inserir">
				Salvar
			</button>
		</div>
	</div>
	<script>
		var dadosForma = <?php echo json_encode([
			"chapa" => array_key_exists("chapa", $lista_produtos[URL_ATUAL]) ? array_column($lista_produtos[URL_ATUAL]["chapa"], "espessura") : [],
			"tarugo" => array_key_exists("tarugo", $lista_produtos[URL_ATUAL]) ? array_column($lista_produtos[URL_ATUAL]["tarugo"], "espessura") : [],
		]); ?>;
	</script>
<?php } elseif (array_key_exists("espessura", $lista_produtos[URL_ATUAL][0])) { ?>
	<div class="produto-prop">
		<div class="mb-3">
			<p>Escolha a espessura:</p>
			<input type="hidden" id="key" name="key" value="<?php echo URL_ATUAL ?>">
			<input type="hidden" id="nome" name="nome" value="<?php echo TITULO ?>">
			<select name="espessuras" id="espessuras" onchange="buscarTamanhos(this,0)">
				<?php foreach ($lista_produtos[URL_ATUAL] as $key => $produto) { ?>
					<option value="<?= $key ?>">
						<?= $produto["espessura"] ?>
					</option>
				<?php } ?>
			</select>
		</div>
		<hr>
		<div class="produto-prop__tamanhos d-none">
			<div class="mb-3">
				<p>
					Escolha um tamanho:
				</p>
				<select name="tamanhos" id="tamanhos" onchange="buscarCores(this)"></select>
			</div>
		</div>
		<div class="produto-prop__cores d-none">
			<div class="mb-3">
				<div class="row">
					<div class="col-lg-6">
						<p>
							Escolha uma cor:
						</p>
						<select name="cores" id="cores"></select>
					</div>
					<div class="col-lg-6">
						<p>
							Escolha a Quantidade:
						</p>
						<input type="number" name="quantidade" id="quantidade" value="1" min="1" max="99">
					</div>
				</div>
			</div>
			<button type="button" class="btn-inserir">
				Salvar
			</button>
		</div>
	</div>
<?php } else { ?>

	<div class="produto-prop" data-content="short-production">
		<div class="produto-prop__tamanhos">
			<input type="hidden" id="key" name="key" value="<?php echo URL_ATUAL ?>">
			<input type="hidden" id="nome" name="nome" value="<?php echo TITULO ?>">
			<div class="mb-3">
				<p>
					Escolha um tamanho:
				</p>
				<select name="tamanhos" id="tamanhos" onchange="buscarCores(this)">
					<?php foreach ($lista_produtos[URL_ATUAL] as $key => $produto) { ?>
						<?php foreach ($produto["tamanhos"] as $index => $size) { ?>
							<option value="<?= URL_ATUAL . "_" . $key ?>">
								<?= $size ?>
							</option>
						<?php } ?>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="produto-prop__cores d-none">
			<div class="mb-3">
				<div class="row">
					<div class="col-lg-6">
						<p>
							Escolha uma cor:
						</p>
						<select name="cores" id="cores"></select>
					</div>
					<div class="col-lg-6">
						<p>
							Escolha a Quantidade:
						</p>
						<input type="number" name="quantidade" id="quantidade" value="1" min="1" max="99">
					</div>
				</div>
			</div>
			<button type="button" class="btn-inserir">
				Salvar
			</button>
		</div>
	</div>
<?php } ?>
