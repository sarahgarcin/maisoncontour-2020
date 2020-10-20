<section class="list">
	<?php if($data->title()->isNotEmpty()):?>
		<h2 id="<?= Str::slug($data->title())?>"><?= $data->title() ?></h2>
	<?php endif;?>
	<?php 
		foreach($data->elementlist()->toBuilderBlocks() as $el):?>
		 <article>
		  	<h3><?=$el->title()?></h3>
		  	<div class="content-to-hide">
		  		<div class="list_title-info">
		  			<?=$el->titleInfo()->kt()?>
		  		</div>
		  		<div class="list_text">
		  			<?=$el->text()->kt()?>
		  		</div>
		  		<div class="photoswipe project__image" itemscope itemtype="http://schema.org/ImageGallery">
						<div class="row">
						<?php foreach($el->gallery()->toFiles() as $image):?>
							<figure class="image-same-height" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
								<a href="<?= $image->url(); ?>" itemprop="contentUrl" data-size="<?= $image->width(); ?>x<?= $image->height(); ?>" title="<?= $image->text()->value(); ?>">
				          <img src="<?= $image->url(); ?>" itemprop="thumbnail"
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
					<?php if($el->pdfs()->isNotEmpty()):?>
			  		<div class="list_pdfs">
			  			<ul>
				  			<?php foreach($el->pdfs()->toStructure() as $pdf):?>
									<li>
										<a href="<?= $pdf->pdf()->toFile()->url()?>" title="<?= $pdf->title()?>" target="_blank">
											<?= $pdf->title()?>
										</a>
									</li>
				  			<?php endforeach;?>
			  			</ul>
			  		</div>
			  	<?php endif;?>
		  	</div>
		  </article>
	<?php endforeach;?>
 
</section>