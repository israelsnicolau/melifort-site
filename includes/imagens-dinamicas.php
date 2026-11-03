<?php $folder_to_scan = "template/imagens/produtos/" . URL_ATUAL  . "/"; ?>
<?php if (is_dir($folder_to_scan)) { ?>
	<?php $dir = scandir($folder_to_scan); ?>
	<?php if ($dir >= 1) { ?>

		<div class="swiper mySwiper py-4">
			<div class="swiper-wrapper">
				<?php for ($i = 1; $i <= (count($dir) - 3); $i++) { ?>
					<div class="swiper-slide">
						<a href="<?php echo URL_IMAGENS . "produtos/" . URL_ATUAL . "/$i.jpg" ?>" data-lightbox="" class="produto-card">
							<div class="produto-card__image">
								<img src="<?php echo URL_IMAGENS . "produtos/" . URL_ATUAL . "/thumb/$i.png" ?>" alt="<?= TITULO ?>">
							</div>
						</a>
					</div>
				<?php } ?>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	<?php } ?>
<?php } else { ?>
	<p>
		Produto sem imagens adicionais.
	</p>
<?php } ?>