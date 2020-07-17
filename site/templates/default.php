<?php snippet('header') ?>
<?php snippet('menu') ?>
	
	<main class='row'>
		<div class="sidebar col-xs-12 col-sm-2">
			<?php 
			if($page->parents()->count() > 0):
				if($page->parent()->uid('editions')):?>
					<div class="go-back-arrow hide-for-small-only">
						<a href="javascript:history.back()">← Retour</a>
					</div>
				<?php endif; ?>
			<?php endif; ?>
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

<?= snippet('photoswipe'); ?>
<?php snippet('footer') ?>
