<?php snippet('header') ?>
<?php snippet('menu') ?>
	
	<main class='row'>
		<div class="sidebar col-xs-12 col-sm-2">
		</div>
		<div class="content col-xs-12 col-sm-10">
			<div class="top-page">
				<h1><?=$page->title()?></h1>
			</div>
			<div class="content-inner actualites col-xs-12">
			<?php 
				$events = $page->children()->listed()->filter(function ($child) {
				  return $child->datefield()->toDate() > time() - (1 * 24 * 60 * 60);
				});
				$events = $events->sortBy(function ($page) {
				  return $page->datefield()->toDate();
				}, 'asc');
				?>
				<?php foreach($events as $child):?>
					<article class="actualite row">
						<?php if($image = $child->cover()->toFile()):?>
							<div class="actualite_cover cover col-xs-12 col-sm-4 col-md-3">
								<?= $image->thumb([
						      'width'   => 300,
						      'height'  => 200,
						      'quality' => 80,
						    ])->html();?>
						    <!-- <img src="<?=$image->url();?>" srcset="<?=$image->srcset();?>"> -->
							</div>
					<?php else:?>
						<div class="col-xs-12 col-sm-4 col-md-3">
						</div>
					<?php endif;?>
						<div class="actualite_content-wrapper col-xs-12 col-sm-8 col-md-8">
							<div class="actualite_title">
								<span class="actualite_date small"><?= $child->datefield()->toDate('d.m.Y') ?></span><span class="actualite-separator small"> — </span><span class="actualite_lieu small"><?= $child->place()?></span>
								<h2><?= $child->title()->html()?></h2>
							</div>
							<div class="actualite_summary">
								<?= $child->summary()->kt()?>
							</div>
							<div class="actualite_content content-to-hide">
								<?= $child->text()->kt()?>
							</div>
						</div>
					</article>
				<?php endforeach;?>
			</div>
		</div>
		
		
	</main>

<?php snippet('footer') ?>
