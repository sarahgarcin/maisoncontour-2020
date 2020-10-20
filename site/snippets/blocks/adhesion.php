<section class="adhesion" id="uniform">
	<?php if($data->title()->isNotEmpty()):?>
		<h2 id="<?= Str::slug($data->title())?>"><?= $data->title() ?></h2>
	<?php endif;?>

	<?php if ($form->success()): ?>
	   <p class="rouge">Votre demande a bien été envoyée</p>
	<?php else: ?>
	   <p class="rouge"><?php snippet('uniform/errors', ['form' => $form]); ?></p>
	<?php endif; ?>
	<p>L’adhésion est valable un an de date à date.</p>
	<form action="<?php echo $page->url() ?>#uniform" method="POST">
		<label for='name'>Nom<span class="rouge">*</span></label>
		<input name="name" type="text" value="<?php echo $form->old('name'); ?>">
		<label for='firstname'>Prénom<span class="rouge">*</span></label>
		<input name="firstname" type="text" value="<?php echo $form->old('firstname'); ?>">
	  <label for='email'>Email<span class="rouge">*</span></label>
	  <input name="email" type="email" value="<?php echo $form->old('email'); ?>">
	  <p>Cochez votre choix :<span class="rouge">*</span></p>
		<div>
		  <input type="radio" name="adhesion" value="15€"
		         checked>
		  <label for="15€">Adhésion de base : 15€</label>
		</div>
		<div>
		  <input type="radio" name="adhesion" value="20€">
		  <label for="20€">Adhésion + : 20€</label>
		</div>
		<div>
		  <input type="radio" name="adhesion" value="au-delà">
		  <label for="au-delà">Adhésion ++ : au-delà</label>
		</div>
		<p>Avec les adhésions + et ++ vous recevrez les deux Cartes de positions artistiques réalisées avec Lisa Sturacci, designer graphique en 2019.</p>
		<label for='address'>Adresse postale (pour l’envoi des Cartes de position artistique) :</label>
	  <input name="address" type="text" value="<?php echo $form->old('address'); ?>">
	  <p>Règlement par chèque à l’adresse&thinsp;:<br> 
	  	Association 40Neuf<br>
	  	16 bis rue de Strasbourg<br>
	  	38000 Grenoble
	  	<br>France 
	  </p>
	  <p>
		Si vous ne pouvez envoyer votre règlement par chèque, merci de le préciser ci-dessous et nous reviendrons vers vous.</p>
	  <label for='message'>Message</label>
		<textarea name="message"><?php echo $form->old('message'); ?></textarea>
		<input type="hidden" name="formid" value="adhesion">
		<?php echo csrf_field(); ?>
		<?php echo honeypot_field(); ?>
	   <input type="submit" value="Envoyer">
	</form>

</section>