<section class="projectsgallery">

	<h2><?= $data->title() ?></h2>
	<ul class="row">
	<?php foreach($data->choosepage()->toStructure() as $el):?>
		<li class="row">
			<?php $elPage = $site->index()->findByURI($el->link())?>
				<figure class="col-xs-5">
					<?php if($image = $elPage->cover()->toFile()):?>
						<?= $image->thumb([
					      'width'   => 500,
					      'height'  => 400,
					      'quality' => 80,
					    ])->html();?>
					<?php endif;?>
				</figure>
				<div class="col-xs-7 projectsgallery_info">
					<a href="<?= $el->link()?>" title="<?= $elPage->title()?>">
						<p><?= $elPage->time()->toDate('d.m.Y')?></p>
						<h3><?= $elPage->title() ?></h3>
						<p><?= $elPage->place() ?></p>
					</a>
				</div>
		</li>
	<?php endforeach;?>
	</ul>
</section>