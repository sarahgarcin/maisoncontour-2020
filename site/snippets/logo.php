<div class="logo">
	<a href="<?= $site->url()?>" title="<?= $site->title()?>">
		<?php if($image = $site->logo()->toFile()): ?>
			<div class="image-logo-wrapper">
				<img src="<?= $image->url()?>" alt="<?= $image->alt()?>">
			</div>
		<?php endif;?>
		<h1><?= $site->title()?></h1>
	</a>
</div>
