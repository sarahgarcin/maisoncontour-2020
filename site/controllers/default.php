<?php

use Uniform\Form;

return function ($kirby) {
   $form = new Form([
      'name' => [
         'rules' => ['required'],
         'message' => 'Votre nom est requis',
      ],
      'firstname'=> [
         'rules' => ['required'],
         'message' => 'Votre prénom est requis',
      ],
      'email' => [
         'rules' => ['required', 'email'],
         'message' => 'L\'adresse email est requise',
      ],
      'adhesion' => [
         'rules' => ['required'],
         'message' => 'Le montant de l\'adhésion est requis',
      ],
      'address'=> [],
      'message' => [],

   ]);

   if ($kirby->request()->is('POST')) {
      $form->emailAction([
         'to' => 'oui@maisoncontour.org',
         // 'to' => 'garcinsarah@gmail.com',
         'from' => 'oui@maisoncontour.org',
         'subject' => 'Nouvelle adhésion sur maisoncontour.org',
         // Use a snippet for the email body (see below).
         'template' => 'demande'
      ])
      ->emailAction([
         // Send the success email to the email address of the submitter.
         'to' => $form->data('email'),
         'from' => 'oui@maisoncontour.org',
         // Set replyTo manually, else it would be set to the value of 'email'.
         'replyTo' => 'oui@maisoncontour.org',
         'subject' => '[MaisonContour] - Confirmation de demande d\'adhésion',
         // Use a snippet for the email body (see below).
         'template' => 'success',
     ])
      ;
   }

   return compact('form');
};