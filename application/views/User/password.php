<?php
echo "<h1>$title</h1>";
echo '<div>';
echo validation_errors(); 
echo form_open('user/password');
echo form_input($email);
echo form_submit('envoi', 'Valider');
echo form_close();
echo "</div>";