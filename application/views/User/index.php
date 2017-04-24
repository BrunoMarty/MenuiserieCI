<?php
echo "<h1>$title</h1>";
if (!isset($_SESSION['user'])) {
    echo form_open('user');

    echo form_input($email);
    echo form_input($password);
    ?>
    <br>
    <a href="<?php echo base_url('index.php/user/inscription'); ?>">S'inscrire</a>
    <a href="<?php echo base_url('index.php/user/password'); ?>">Mot de passe oublié</a><br/>
    <input type="submit" name="submit" value="Se connecter" />


    <?php
    echo form_close();
} else {
    echo "Bonjour";
    
}