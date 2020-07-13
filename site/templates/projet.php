<?php snippet('header') ?>
<?php snippet('menu') ?>
	
<main class='row'>
	<div class="sidebar col-xs-12 col-sm-2">
		<div class="go-back-arrow hide-for-small-only">
			<a href="javascript:history.back()">← Retour</a>
		</div>
	</div>
	<div class="content col-xs-12 col-sm-10">
		<div class="top-page">
			<h1>
				<a href="<?=$site->index()->find('album')->url()?>" title="<?=$site->index()->find('album')->title()?>">
					<?=$site->index()->find('album')->title()?>
				</a>
			</h1>
		</div>
		<div class="content-inner col-xs-12 row">
			<div class="go-back-arrow show-for-small-only">
				<a href="javascript:history.back()">← Retour</a>
			</div>
			<div class="projet-images col-xs-12 col-sm-7">
				<div class="slider-for">		
					<?php foreach($page->images() as $image):?>
						<figure class="<?php e($image->isPortrait(), 'portrait', 'landscape')?>">
							<img src="<?= $image->url() ?>" alt="<?= $image->caption() ?>">
							<figcaption><?= $image->caption()->kt()?></figcaption>
						</figure>
					<?php endforeach;?>
				</div>
				<div class="slider-nav row">
					<?php foreach($page->images() as $image):?>
						<figure class="image-same-height">
							<img src="<?= $image->url() ?>" alt="<?= $image->caption() ?>">
							<figcaption><?= $image->caption()->kt()?></figcaption>
						</figure>
					<?php endforeach;?>
				</div>
			</div>
			<div class="projet-infos col-xs-12 col-sm-5">
				<div class="projet-infos-inner">
					<p class="date"><?= $page->time()?></p>
					<h1><?= $page->title()?></h1>
					<p class="place"><?= $page->place()?></p>
					<p class="topography"><?= $page->text()->kt()?></p>
					<p class="topography"><?= $page->topography()->kt()?></p>
					<p class="distribution"><?= $page->distribution()->kt()?></p>
					<p class="partenaires"><?= $page->partenaires()->kt()?></p>
					<ul class="pdfs">
						<?php foreach($page->pdfs()->toStructure() as $pdf): ?>
							<li>
								<a class="pdf" href="<?= $pdf->doc()->toFile()->url()?>" title="<?= $pdf->title()?>" target="_blank">
									<?= $pdf->title()?>
								</a>
							</li>
						<?php endforeach;?>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	
</main>

<?= snippet('photoswipe'); ?>
<?php snippet('footer') ?>
