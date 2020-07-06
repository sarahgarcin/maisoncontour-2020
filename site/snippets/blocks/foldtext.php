<section class="bodytext foldtext">

	<h2><?= $data->title() ?></h2>
	<?= $data->summary()->kt() ?>
	<div class="more-btn">
		En savoir plus
	</div>
	<div class="content-to-hide">
		<?= $data->text()->kt() ?>
	</div>
</section>