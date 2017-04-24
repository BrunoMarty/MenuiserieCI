<?php
echo "<h1>$title</h1>";
echo '<a href="#" id="part">Particulier</a>&nbsp<a href="#" id="pro">Professionnel</a>';

// bloc pour le formulaire d'inscription particulier
echo '<div id="particulier">';
echo validation_errors(); 
echo form_open('user/inscription');

echo form_input($form['particulier']['nom']);
echo form_input($form['particulier']['prenom'])."<br>";
echo form_input($form['particulier']['email']);
echo form_input($form['particulier']['password'])."<br>";
echo form_input($form['particulier']['adresse']);
echo form_input($form['particulier']['ville'])."<br>";
echo form_input($form['particulier']['cp']);
echo form_input($form['particulier']['assurance'])."<br>";
echo form_input($form['particulier']['naissance']);
echo form_input($form['particulier']['tel'])."<br>";
echo form_input($form['particulier']['type']);

echo form_submit('envoi', 'Valider');

echo form_close();
echo "</div>";

// bloc pour formulaire d'inscription d'un professionnel
echo '<div id="professionnel">';
echo form_open('user/inscription');
echo validation_errors(); 

echo form_input($form['professionnel']['nom']);
echo form_input($form['professionnel']['prenom'])."<br>";
echo form_input($form['professionnel']['email']);
echo form_input($form['professionnel']['password'])."<br>";
echo form_input($form['professionnel']['adresse']);
echo form_input($form['professionnel']['ville'])."<br>";
echo form_input($form['professionnel']['cp']);
echo form_input($form['professionnel']['tel'])."<br>";
echo form_input($form['professionnel']['siret']);
echo form_input($form['professionnel']['raison'])."<br>";
echo form_input($form['professionnel']['creation']);
echo form_input($form['professionnel']['type'])."<br>";

echo form_submit('envoi', 'Valider');

echo form_close();
echo "</div>";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
         $("#part").slideToggle("fast");
        $("#part").click(function () {
            if ($("#professionnel").is(":visible")) {
                $("#professionnel").slideToggle("fast");
                $("#part").slideToggle("fast");
                $("#pro").slideToggle("fast");
                $("#particulier").slideToggle("fast");
            }
        });
        $("#pro").click(function () {
            if ($("#particulier").is(":visible")) {
                $("#particulier").slideToggle("fast");
                $("#part").slideToggle("fast");
                $("#pro").slideToggle("fast");
                $("#professionnel").slideToggle("slow");
            }
        });
    });
</script>



