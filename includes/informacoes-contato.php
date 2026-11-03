<section class="informacoes-contato">
	<h3>Entre em contato para saber mais sobre <?php echo TITULO; ?></h3>
	<div>
		<?php
		$fone = '';
		foreach ($config['site']['telefone'] as $key => $value) {
			$fone .= '<span>'.$value.'</span> - ';
		}
		echo rtrim($fone, ' - ');
		?>
	</div>
</section>