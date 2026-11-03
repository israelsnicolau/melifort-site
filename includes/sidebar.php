<aside class="sidebar">
	<div class="formulario-sidebar">
		<?php require 'accordion-2.php'; ?>
	</div>
	<br>
	<div class="sidebar-box">
		<a href="<?php echo URL; ?>informacoes" title="Informações">
			<h3>Informações</h3>
		</a>
		<ul class="sidebar-conteudo leftcoll">
			<?php foreach ($palavras_chave as $key => $palavra) { ?>
				<li><a href="<?php echo URL . $focus->formatStringToURL($palavra, $key); ?>" title="<?php echo $palavra; ?>"><?php echo $palavra; ?></a></li>
			<?php } ?>
		</ul>
	</div>
</aside>