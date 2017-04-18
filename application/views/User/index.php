<?php
echo "<h1>$title</h1>";
if(!$_SESSION){
echo form_open('user'); 
?>

       <input type="text" name="email" size="20" placeholder="E-mail ..." /><br/>
       <input type="text" name="password" size="20" placeholder="Mot de passe ..." /><br/>
       <a href="">S'inscrire</a>
       <a href="">Mot de passe oublié</a><br/>
       <input type="submit" name="submit" value="Se connecter" />

</form>
<?php 
}else{
    echo "Bonjour, ".$_SESSION['user']['nom']." ".$_SESSION['user']['prenom'];
}