<section class="adhesion" id="uniform">
	<?php if($data->title()->isNotEmpty()):?>
		<h2 id="<?= Str::slug($data->title())?>"><?= $data->title() ?></h2>
	<?php endif;?>

	<?php if ($contact->success()): ?>
	   <p class="rouge">Votre demande a bien été envoyée</p>
	<?php else: ?>
	   <p class="rouge"><?php snippet('uniform/errors', ['form' => $contact]); ?></p>
	<?php endif; ?>
	<form action="<?php echo $page->url() ?>#uniform" method="POST">
		<label for='name'>Nom<span class="rouge">*</span></label>
		<input name="name" type="text" value="<?php echo $contact->old('name'); ?>">
		<label for='firstname'>Prénom<span class="rouge">*</span></label>
		<input name="firstname" type="text" value="<?php echo $contact->old('firstname'); ?>">
		<label for='country'>Pays</label>
		<input name="country" type="text" value="<?php echo $contact->old('country'); ?>">
	  <label for='email'>Email<span class="rouge">*</span></label>
	  <input name="email" type="email" value="<?php echo $contact->old('email'); ?>">
	  <p>Vous souhaitez être tenu informé de :</p>
		<div>
		  <input type="radio" name="type" value="tout"
		         checked>
		  <label for="tout">Tout</label>
		</div>
		<div>
		  <input type="radio" name="type" value="transmissions">
		  <label for="transmissions">Transmissions</label>
		</div>
		<div>
		  <input type="radio" name="type" value="creations">
		  <label for="creations">Créations</label>
		</div>
		<p>En vous inscrivant à ce formulaire vous recevrez par email les actualités de maison contour</p>
		<input type="hidden" name="formid" value="contact">
		<?php echo csrf_field(); ?>
		<?php echo honeypot_field(); ?>
	   <input type="submit" value="Envoyer">
	</form>

</section>