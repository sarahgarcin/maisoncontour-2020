<section class="pagesgallery">

	<?php if($data->title()->isNotEmpty()):?>
		<h2 id="<?= Str::slug($data->title())?>"><?= $data->title() ?></h2>
	<?php endif;?>
	<ul class="row">
	<?php foreach($data->choosepage()->toStructure() as $el):?>
		<li class="col-xs-6 col-sm-4 col-md-4">
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