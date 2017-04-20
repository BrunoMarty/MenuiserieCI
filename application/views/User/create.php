<?php

echo "<h1>$title</h1>";
echo '<div class="particulier">';
echo form_open('user/inscription');

echo form_input($form['particulier']['nom']);
echo form_input($form['particulier']['prenom']);
echo form_input($form['particulier']['email']);
echo form_input($form['particulier']['password']);
echo form_input($form['particulier']['adresse']);
echo form_input($form['particulier']['ville']);
echo form_input($form['particulier']['cp']);
echo form_input($form['particulier']['assurance']);
echo form_input($form['particulier']['naissance']);
echo form_input($form['particulier']['tel']);
echo form_input($form['particulier']['type']);

echo form_submit('envoi', 'Valider');

echo form_close();
echo "</div>";


