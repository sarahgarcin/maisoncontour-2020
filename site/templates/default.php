<?php snippet('header') ?>
<?php snippet('menu') ?>
	
	<main class='row'>
		<div class="sidebar col-xs-12 col-sm-2">
			<div class="table-of-contents hide-for-small-only">
				<ul>

				</ul>
			</div>
		</div>
		<div class="content col-xs-12 col-sm-10">
			<div class="top-page">
				<h1><?=$page->title()?></h1>
			</div>
			<div class="content-inner col-xs-12 col-sm-10 col-md-8">
				<?= $page->text()->kt()?>
				<?php 
					foreach($page->mybuilder()->toBuilderBlocks() as $block):
					  snippet('blocks/' . $block->_key(), array('data' => $block));
					endforeach;
				?>
			</div>
		</div>
		
		
	</main>

<?php snippet('footer') ?>
