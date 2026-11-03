	<form id="formulario">
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
			<textarea class="form-control" name="mensagem" placeholder="Mensagem" rows="4"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-danger w-100 btn-envia">Enviar</button>
		</div>
	</form>