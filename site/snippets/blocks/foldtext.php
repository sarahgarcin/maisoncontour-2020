<section class="bodytext foldtext">

	<?php if($data->title()->isNotEmpty()):?>
		<h2 id="<?= Str::slug($data->title())?>"><?= $data->title() ?></h2>
	<?php endif;?>
	<?= $data->summary()->kt() ?>
	<div class="more-btn">
		En savoir plus
	</div>
	<div class="content-to-hide">
		<?= $data->text()->kt() ?>
	</div>
</section>