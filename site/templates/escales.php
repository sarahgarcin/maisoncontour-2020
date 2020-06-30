<?php snippet('header') ?>
<?php snippet('menu') ?>
	
	<main class='row'>
		<div class="sidebar col-xs-12 col-md-2">
		</div>
		<div class="content col-xs-12 col-md-10">
			<div class="top-page">
				<h1><?=$page->title()?></h1>
			</div>
			<div class="content-inner list-projects col-xs-12">
				<div class="list-projects__th hide-for-small-only">
					<div class="list-projects__details">
						<div class="list-projects__details__inner row">
							<div class="list-projects__td list-projects__td--date col-md-2">
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
					$projects = $site->index()->find('projets');
					
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
		    	<article>
			    	<div class="list-project__details__inner row">
							<p class="list-project__td list-project__td--date col-md-2">
								<?= $project->time()->toDate('d.m.Y') ?>
							</p>
							<p class="list-project__td col-md-2">
									<?= $project->topography() ?>	
							</p>
							<p class="list-project__td col-md-2">
									<?= $project->place() ?>
							</p>
							<div class="list-project__td list-project__td--title col-md-2">
								<h2><?= $project->title() ?></h2>
								<?= $project->text()->kt() ?>
							</div>
							<div class="list-project__td list-project__td--distrbution col-md-2">
								<?= $project->distribution()->kt() ?>
							</div>
							<div class="list-project__td list-project__td--partenaires col-md-2">
								<?= $project->partenaires()->kt() ?>
							</div>							
						</div>
						<?php if($project->hasImages()):?>
							<div class="list-project__content fold">
								<div class="photoswipe project__image" itemscope itemtype="http://schema.org/ImageGallery">
									<div class="row">
									  <?php foreach ($project->images() as $image): ?>
									    <figure class="image-same-height" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
									        <a href="<?= $image->url(); ?>" itemprop="contentUrl" data-size="<?= $image->width(); ?>x<?= $image->height(); ?>"
									           title="<?= $image->text()->value(); ?>">
									            <img src="<?= $image->url(); ?>" itemprop="thumbnail"
									                 alt="<?= $page->title()->value() ?> <?= $image->text()->value(); ?>"
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
			    
		    <?php endforeach ?>
	    </div>
				
			</div>
		</div>
		
		
	</main>

<?= snippet('photoswipe'); ?>
<?php snippet('footer') ?>
