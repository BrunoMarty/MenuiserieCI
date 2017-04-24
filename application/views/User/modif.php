<?php
echo "<h1>$title</h1>";

// bloc pour le formulaire d'inscription particulier
echo '<div>';
echo form_open('user/account');
echo validation_errors(); 
echo form_input($form['nom']);
echo form_input($form['prenom'])."<br>";
echo form_input($form['email']);
echo form_input($form['old_password'])."<br>";
echo form_input($form['password'])."<br>";
echo form_input($form['adresse']);
echo form_input($form['ville'])."<br>";
echo form_input($form['cp']);
echo form_input($form['tel'])."<br>";


if(isset($_SESSION['user']['siret'])){

echo form_input($form['siret']);
echo form_input($form['raison'])."<br>";
echo form_input($form['creation']);
echo form_input($form['type'])."<br>";
}

else{
// bloc pour formulaire d'inscription d'un professionnel
echo form_input($form['assurance'])."<br>";
echo form_input($form['naissance']);
echo form_input($form['type']);

}

echo form_submit('envoi', 'Valider');
echo form_close();
echo "</div>";




