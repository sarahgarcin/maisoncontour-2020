<?php snippet('header') ?>
<header role="banner" class="col-xs-4 col-md-2">
	<?php snippet('logo')?>
</header>

	
<?php //phpinfo();?>

	<main class="row">
		<div class="sidebar col-xs-12 col-md-2">
			<div class="sentence-gray-italic">
				<?= $page->text()->kt()?>
			</div>
			
		</div>
		<div class="content col-xs-12 col-md-10">
			<?php snippet('nav')?>
		</div>

		
	</main>

<?php snippet('footer') ?>
