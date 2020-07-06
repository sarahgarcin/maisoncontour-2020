<section class="imagesgallery">
	<?php if($data->title()->isNotEmpty()):?>
		<h2 id="<?= Str::slug($data->title())?>"><?= $data->title() ?></h2>
	<?php endif;?>
	<ul class="row">
	<?php foreach($data->selectimages()->toFiles() as $image):?>
		<li>
			<figure class="image-same-height">
			<?= $image->thumb([
		      'width'   => 300,
		      'height'  => 200,
		      'quality' => 80,
		    ])->html();?>
		    <figcaption><?= $image->caption()->kt()?></figcaption>
		 	</figure>
		</li>
	<?php endforeach;?>
	</ul>
</section>