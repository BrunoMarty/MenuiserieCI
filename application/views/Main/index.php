
<!DOCTYPE html>
<html>
    <head>
        <title>Menuiserie Collaborative</title>   
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/bootstrap.css">
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        
        
    </head>

    <body><div class="fadein">
       
        <div id='img2'>
            <img src="<?php echo base_url(); ?>img/tools-498202_960_720.jpg">        
        </div>
         <div id='img1'>
            <img src="<?php echo base_url(); ?>img/woodworking-691329_960_720.jpg">          
        </div>  
            
             <h2 id="home">La Menuiserie Collaborative</h2>
            
            <a id="texte" class="btn btn-primary" href="<?php echo site_url('user/inscription') ?>" role="button">Inscrivez-vous !</a>
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/slide.js"></script>
  <div class="navbar navbar-default row">
            <ul class="nav navbar-nav">
                <li><a href='<?php echo site_url() ?>'><img src="<?php echo base_url(); ?>/img/logo.png" height="40" alt="La menuiserie"></a></li>
            </ul>
            <div class="topnav" id="myTopnav">
                <?php if (!isset($_SESSION['user'])) { ?>
                    <a href='<?php echo site_url('user') ?>'>Connexion</a>
                <?php } else { ?>
                    <a href='<?php echo site_url('user/account') ?>'>Mon Compte</a>
                <?php } ?>
                <a href='<?php echo site_url('contact') ?>'>Nous Contacter</a>
                <?php if (isset($_SESSION['user'])) { ?>
                    <a href='<?php echo site_url('reserver') ?>'>Reserver</a>
                <?php } ?>
                <a href='<?php echo site_url('mot') ?>'>En quelques mots...</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            </div>

        </div>
    
    
    
    <div class="container margin">
     <div class="row">
    <?php foreach($articles as $article): ?>
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">   <article>
    <h1><?php echo $article['titre'] ?></h1>
    <p><?php echo $article['texte']; ?></p>
    <a href='<?php echo $article['lien'] ?>'>Espace Collaboratif</a>
         </div>
    <?php endforeach; ?>
    
  <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>   

     </div>



