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
		  	</div>
		  </article>
	<?php endforeach;?>
 
</section>