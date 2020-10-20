<?php snippet('header') ?>
<?php snippet('menu') ?>

<!-- <div class="page_loader"> 
	<div class="page_loader-inner"> 
		<img src="<?= kirby()->urls()->assets()?>/images/loader.gif" alt="loader" />
	</div>
</div> -->
	
	<main class='row'>
		<div class="sidebar col-xs-12 col-md-2">
		</div>
		<div class="content col-xs-12 col-md-10">
			<div class="top-page">
				<h1><?=$page->title()?></h1>
			</div>
			<div class="content-inner list-projects col-xs-12">
				<div class="escales_intro-text">
					<?= $page->intro()->kt() ?>
				</div>
				<div class="list-projects__th hide-for-small-only">
					<div class="list-projects__details">
						<div class="list-projects__details__inner row">
							<div class="list-projects__td list-projects__td--date col-md-1">
								<!-- <a href="<?=$page->url()?>/sort:date" title="Date"> -->
									Date
								<!-- </a> -->
							</div>
							<div class="list-projects__td list-projects__td--topography col-md-2">
								Topographie
							</div>
							<div class="list-projects__td list-projects__td--place col-md-2">
								<!-- <a href="<?=$page->url()?>/sort:place" title="Lieu"> -->
									Lieu
								<!-- </a> -->
							</div>
							<div class="list-projects__td list-projects__td--title col-md-2">
								<!-- <a href="<?=$page->url()?>/sort:title" title="Titre"> -->
									Titre
								<!-- </a> -->
							</div>
							<div class="list-projects__td list-projects__td--distribution col-md-2">Distribution</div>
							<div class="list-projects__td list-projects__td--partenaires col-md-2">Partenaires</div>
						</div>
					</div>
				</div>
				<div class="list-projects-content">
				<?php 
					$projects = $site->index()->find('creations');
					
					// sort by category
					// $projects = $projects->children()->listed()->sortBy(function ($page) {
					// 	echo $page->time()->toDate();
					//   return $page->time()->toDate();
					// }, 'desc');
					// $projects = $projects->sortBy('time');
					// if($sort = param('sort')) {
  			// 		$projects = $projects->sortBy($sort);
					// }
				?>
		    <?php foreach ($projects->children()->listed() as $project): ?>
		    	<?php if($project->displayEscales() != "no"):?>
			    	<article>
				    	<div class="list-project__details__inner row">
								<p class="list-project__td list-project__td--date col-xs-12 col-md-1">
									<?= $project->time()?>
								</p>
								<div class="list-project__td list-project__td--topography col-xs-12 col-md-2">
									<div class="chopper">
										<p><?= $project->topography()->chopper(19, 'words', '…') ?>	</p>
									</div>
									<div class="entire">
										<p><?= $project->topography()?></p>
									</div>
								</div>
								<p class="list-project__td list-project__td--place col-xs-12 col-md-2">
										<?= $project->place() ?>
								</p>
								<div class="list-project__td list-project__td--title col-xs-12 col-md-2">
									<h2><?= $project->title() ?></h2>
									<div class="chopper">
										<?= $project->text()->kt()->chopper(10, 'words', '…') ?>
									</div>
									<div class="entire">
										<?= $project->text()->kt() ?>
									</div>
								</div>
								<div class="list-project__td list-project__td--distribution col-xs-12 col-md-2">
									<div class="chopper">
										<?= $project->distribution()->chopper(18, 'words', '…')?>
									</div>
									<div class="entire">
										<?= $project->distribution()->kt() ?>
									</div>
								</div>
								<div class="list-project__td list-project__td--partenaires col-xs-12 col-md-3">
									<div class="chopper"><?= $project->partenaires()->chopper(20, 'words', '…') ?></div>
									<div class="entire">
										<?= $project->partenaires()->kt() ?>
									</div>
								</div>							
							</div>
							<?php if($project->hasImages()):?>
								<div class="list-project__content fold">
									<div class="photoswipe project__image" itemscope itemtype="http://schema.org/ImageGallery">
										<div class="row">
										  <?php foreach ($project->images() as $image): ?>
										  	<figure class="image-same-height" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" data-image="<?= $image->url(); ?>">
										        <a href="<?= $image->url(); ?>" itemprop="contentUrl" data-size="<?= $image->width(); ?>x<?= $image->height(); ?>"
										           title="<?= $image->text()->value(); ?>">
										            <img src="" itemprop="thumbnail"
										                 alt="<?= $project->title()?>"
										                 class="img-responsive"/>
										        </a>
										        <?php if($image->caption()->isNotEmpty()):?>
															<figcaption itemprop="caption description"><?= $image->caption()->kt()?></figcaption>
														<?php endif; ?>
										    </figure>
										  <?php endforeach; ?>
										</div>
									</div>
								</div>
							<?php endif;?>
				    </article>
			    <?php endif;?>
		    <?php endforeach ?>
	    </div>
				
			</div>
		</div>
		
		
	</main>

<?= snippet('photoswipe'); ?>
<?php snippet('footer') ?>
