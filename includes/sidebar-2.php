<aside class="sidebar">
	<div class="formulario-sidebar">
		<?php require 'includes/accordion-2.php'; ?>
	</div>
	<br>
	<div class="sidebar-box">
		<a href="<?php echo URL; ?>produtos" title="Produtos">
			<h3>Produtos</h3>
		</a>
		<ul class="sidebar-conteudo leftcoll">
			<?php foreach ($produtos as $key => $produto) { ?>
				<li><a href="<?php echo URL . $focus->formatStringToURL($produto, $key); ?>" title="<?php echo $produto; ?>"><?php echo $produto; ?></a></li>
			<?php } ?>
		</ul>
	</div>
</aside>