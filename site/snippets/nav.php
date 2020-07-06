<div class="nav col-xs-12">
	<nav class="main-nav">
		<ul class="main-nav_first-level">
			<div class="groupe1">
				<?php foreach($site->groupe1()->split() as $p): ?>
					<?php $p = $site->index()->find($p)?>
					<li class="<?= r($p->isOpen(), ' active') ?>">
	        	<a href="<?= $p->url()?>" title="<?= $p->title()?>">
	        		<?= $p->title() ?>
	        	</a>
	      	</li>
				<?php endforeach;?>
			</div>
			<div class="groupe2">
				<?php foreach($site->groupe2()->split() as $p): ?>
					<?php $p = $site->index()->find($p)?>
					<li class="<?= r($p->isOpen(), ' active') ?>">
	        	<a href="<?= $p->url()?>" title="<?= $p->title()?>">
	        		<?= $p->title() ?>
	        	</a>
	      	</li>
				<?php endforeach;?>
			</div>
			<div class="groupe3">
				<?php foreach($site->groupe3()->split() as $p): ?>
					<?php $p = $site->index()->find($p)?>
					<li class="<?= r($p->isOpen(), ' active') ?>">
	        	<a href="<?= $p->url()?>" title="<?= $p->title()?>">
	        		<?= $p->title() ?>
	        	</a>
	      	</li>
				<?php endforeach;?>
			</div>
			<div class="groupe4">
				<?php foreach($site->groupe4()->split() as $p): ?>
					<?php $p = $site->index()->find($p)?>
					<li class="<?= r($p->isOpen(), ' active') ?>">
	        	<a href="<?= $p->url()?>" title="<?= $p->title()?>">
	        		<?= $p->title() ?>
	        	</a>
	      	</li>
				<?php endforeach;?>
			</div>
			<div class="groupe5">
				<?php foreach($site->groupe5()->split() as $p): ?>
					<?php $p = $site->index()->find($p)?>
					<li class="<?= r($p->isOpen(), ' active') ?>">
	        	<a href="<?= $p->url()?>" title="<?= $p->title()?>">
	        		<?= $p->title() ?>
	        	</a>
	      	</li>
				<?php endforeach;?>
			</div>
			<div class="old-site">
				<?= $site->old()->kt()?>
			</div>
			
			<!-- <?php foreach($pages->listed() as $p): ?>
				<li class="<?= $p->group() ?><?= r($p->isOpen(), ' active') ?>">
	        	<a href="<?= $p->url()?>" title="<?= $p->title()?>">
	        		<?= $p->title() ?>
	        	</a>
	      </li>
			<?php endforeach; ?> -->
		</ul>

	</nav>
</div>
