<div class="nav col-xs-12">
	<nav class="main-nav">
		<ul class="main-nav_first-level">
			<?php foreach($pages->listed() as $p): ?>
				<li class="<?= $p->group() ?><?= r($p->isOpen(), ' active') ?>">
	        	<a href="<?= $p->url()?>" title="<?= $p->title()?>">
	        		<?= $p->title()->html() ?>
	        	</a>
	      </li>
			<?php endforeach; ?>
		</ul>

	</nav>
</div>