<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php 
	$projects = $site->index()->find('creations');
	$tags = [];
?>
	
	<main class='row'>
		<div class="sidebar col-xs-12 col-md-2">
			<ul class="tags hide-for-small-only">
				<?php foreach($projects->tags()->toStructure() as $tag):?>
					<li data-tag="<?= Str::slug($tag->title())?>" data-title="<?= $tag->text() ?>"><?= $tag->title() ?></li>
					<?php $tags[] = Str::slug($tag->title()); ?>
				<?php endforeach?>
			</ul>
		</div>
		<div class="content col-xs-12 col-md-10">
			<div class="top-page">
				<h1><?=$page->title()?></h1>
			</div>
			<div class="content-inner list-projects col-xs-12">
				<div class="list-projects-content row">
					<ul class="tags show-for-small-only">
						<?php foreach($projects->tags()->toStructure() as $tag):?>
							<li data-tag="<?= Str::slug($tag->title())?>" data-title="<?= $tag->text() ?>"><?= $tag->title() ?></li>
							<?php $tags[] = Str::slug($tag->title()); ?>
						<?php endforeach?>
					</ul>
			    <?php foreach ($projects->children()->listed() as $project): ?>
			    	<?php $randomSize = random_int(1, 3);?>
			    	<?php $randomBlank = random_int(1, 4);?>
			    	<?php $image = $project->cover()->toFile()?>
			    	<?php if($project->displayAlbum() != "no"):?>
				    	<?php //print_r($project->category());
				    	//foreach ($project->category()->split() as $category): echo $category; endforeach; ?>
					    	<?php if($image->isPortrait()):?>
					    		<div class="album-project <?php e($randomSize==1, 'col-xs-3 col-sm-1')?><?php e($randomSize==2, 'col-xs-4 col-sm-2')?><?php e($randomSize==3, 'col-sm-3 col-xs-6')?><?php foreach ($project->category()->split() as $category): echo ' '. $tags[$category];endforeach ?>">
					    	<?php else:?>
						    	<div class="album-project <?php e($randomSize==1, 'col-sm-2 col-xs-4')?><?php e($randomSize==2, 'col-sm-3 col-xs-5')?><?php e($randomSize==3, 'col-sm-4 col-xs-6')?><?php foreach ($project->category()->split() as $category): echo ' '. $tags[$category];endforeach ?>">
						    <?php endif;?>
					    		<a href="<?= $project->url() ?>" title="<?= $project->title() ?>">
							    		<figure>
							    			<?= $image->thumb([
										      'width'   => 500,
										      'height'  => 600,
										      'quality' => 80
										    ])->html(); ?>
							    		</figure>
						    		<div class="album-project-info">
						    			<h3><?= $project->time()?></h3>
						    			<h2><?= $project->title()?></h2>
						    			<p><?= $project->place()?></p>
						    		</div>
						    	</a>
					    	</div>
					    <?php endif;?>
				    	<?php if($randomBlank != 1):?>
				    		<div class="album-empty <?php e($randomSize==1, 'col-xs-2 col-sm-2')?><?php e($randomSize==2, 'col-xs-3 col-sm-3')?><?php e($randomSize==3, 'col-xs-4 col-sm-4')?>">
				    		</div>
				    	<?php endif;?>
			    <?php endforeach ?>
	    </div>
				
			</div>
		</div>
		
		
	</main>

<?= snippet('photoswipe'); ?>
<?php snippet('footer') ?>
