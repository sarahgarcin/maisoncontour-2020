<section class="pagesgallery">

	<h2><?= $data->title() ?></h2>
	<ul class="row">
	<?php foreach($data->choosepage()->toStructure() as $el):?>
		<li class="col-xs-6 col-md-4">
			<?php $elPage = $site->index()->findByURI($el->link())?>
			<a href="<?= $el->link()?>" title="<?= $elPage->title()?>">
				<figure>
					<?php if($image = $elPage->cover()->toFile()):?>
						<?= $image->thumb([
					      'width'   => 500,
					      'height'  => 400,
					      'quality' => 80,
					    ])->html();?>
					<?php endif;?>
					<figcaption><?= $elPage->title()?></figcaption>
				</figure>
			</a>
		</li>
	<?php endforeach;?>
	</ul>
</section>