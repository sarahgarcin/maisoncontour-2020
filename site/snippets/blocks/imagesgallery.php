<section class="imagesgallery">
	<?php if($data->title()->isNotEmpty()):?>
		<h2 id="<?= Str::slug($data->title())?>"><?= $data->title() ?></h2>
	<?php endif;?>
	<div class="photoswipe project__image" itemscope itemtype="http://schema.org/ImageGallery">
		<div class="row">
		<?php foreach($data->selectimages()->toFiles() as $image):?>
			<figure class="image-same-height" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
				<a href="<?= $image->url(); ?>" itemprop="contentUrl" data-size="<?= $image->width(); ?>x<?= $image->height(); ?>" title="<?= $image->text()->value(); ?>">
          <img srcset="<?= $image->srcset([300, 800, 1024]) ?>" src="<?= $image->url(); ?>" sizes="100w" itemprop="thumbnail"
               alt="<?= $page->title()->value() ?> <?= $image->text()->value(); ?>"
               class="img-responsive"/>
				</a>
        <?php if($image->caption()->isNotEmpty()):?>
					<figcaption itemprop="caption description"><?= $image->caption()->kt()?></figcaption>
				<?php endif; ?>
		 	</figure>
		<?php endforeach;?>
		</ul>
	</div>
</section>