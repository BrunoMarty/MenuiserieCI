
<html>
    <head>
        <title>Menuiserie Collaborative</title>   
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/bootstrap.css">
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style2.css">
        
        
    </head>

    <body>
         <style>


.fadein img {
    width: 100%;  
    
}

.fadein div {
    display: none;
    margin-bottom:5em;
    height: 100%;
    position: fixed;
    width: 100%;
    position:fixed;
}
h2, a, p {
    position: absolute;
    color: white;
    padding: 25%;
    top: -25%;
    z-index: 10;
}
        </style>
    <div class="fadein">
        <div>
            <img src="img/wood-877368_960_720.jpg">
            <a class="btn btn-primary" href="#" role="button">Link</a>
            <a href="http://menuiserieco.fr/espace-collaboratif/Devenez-Fondateur/">Devenez Fondateur de la Menuiserie Collaborative</a>
            <h2>La Menuiserie Collaborative</h2>
            
        </div>
        <div>
            <img src="img/tools-498202_960_720.jpg">
        </div>
        <div>
            <img src="img/woodworking-691329_960_720.jpg">
            
        </div>
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">

$().ready(function() {
    $('.fadein div:nth-of-type(1)').delay(0).fadeIn().delay(6000).fadeOut();
    $('.fadein div:nth-of-type(2)').delay(6500).fadeIn().delay(10000).fadeOut();
    $('.fadein div:nth-of-type(3)').delay(15000).fadeIn().delay(20000).fadeOut();
});


</script>
 <div class="navbar navbar-default row">
      <ul class="nav navbar-nav">
          <li><a href='<?php echo site_url()?>'><img src="<?php echo base_url(); ?>/img/logo.png" height="50" alt="La menuiserie"></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href='<?php echo site_url('reserver')?>'>Reserver</a></li>          
            <li><a href='#'>En quelques mots...</a></li>
            <li><a href='<?php echo site_url('partenaires')?>'>Nos Partenaires</a></li>
            <li><a href='<?php echo site_url('contact')?>'>Nous Contacter</a></li>
            <li><a href='#'>Espace Collaboratif</a></li>
            <?php if(!isset($_SESSION['user'])){ ?>
            <li><a href='<?php echo site_url('user')?>'>Connexion</a></li>
            <?php  } else { ?>
             <li><a href='<?php echo site_url('user/account')?>'>Mon Compte</a></li>
            <?php } ?>
        </ul>
       
    </div>
    
    <div class="container">

</body>


</html>
