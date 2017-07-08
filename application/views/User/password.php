<?php

echo '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 connect">';
echo "<h1>$title</h1>";
echo validation_errors(); 
echo form_open('user/password');
echo form_input($email)."<br>";
echo form_submit('envoi', 'Valider');
echo form_close();
echo "</div><div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4\"></div>";