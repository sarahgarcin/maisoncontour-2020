<?php snippet('header') ?>
<header role="banner" class="col-xs-4 col-md-2">
	<?php snippet('logo')?>
	<div class="menu_btns">
		<?php snippet('languages')?>
	</div>
</header>

<main class="row">
	<!-- sidebar -->
	<div class="sidebar col-xs-12 col-sm-2 col-md-2 hide-for-small-only">
		<div class="sentence-gray-italic">
			<?= $page->text()->kt()?>
		</div>
	</div>
	<!-- content -->
	<div class="content col-xs-12 col-sm-10 col-md-10">
		<?php snippet('nav')?>
	</div>
</main>

<?php snippet('footer') ?>
