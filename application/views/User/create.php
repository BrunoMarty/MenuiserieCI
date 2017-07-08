<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 bloc">
   
    <h1><?php echo $title ?></h1>
    <p>Passer en formulaire pour <a href="#" id="part">Particulier</a><a href="#" id="pro">Professionnel</a></p>

    <div id="particulier"> 
        <?php
        echo form_open('user/inscription');
        ?>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php echo $form['particulier']['email']['label'] ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_input($form['particulier']['email']) ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="error"> <?php echo form_error('email'); ?></span>
            </div> 

        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php echo $form['particulier']['password']['label']; ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_input($form['particulier']['password']) ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="error"> <?php echo form_error('password'); ?></span>
            </div> 
        </div>



        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php echo $form['particulier']['nom']['label'] ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_input($form['particulier']['nom']) ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="error"> <?php echo form_error('nom'); ?></span>
            </div> 
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php echo $form['particulier']['prenom']['label'] ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_input($form['particulier']['prenom']) ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="error"> <?php echo form_error('prenom'); ?></span>
            </div> 
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php echo $form['particulier']['date_naissance']['label'] ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_input($form['particulier']['date_naissance']) ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="error"> <?php echo form_error('date_naissance'); ?></span>
            </div> 
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php echo $form['particulier']['cp']['label'] ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_input($form['particulier']['cp']) ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="error"> <?php echo form_error('cp'); ?></span>
            </div> 
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php echo $form['particulier']['adresse']['label'] ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_input($form['particulier']['adresse']) ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="error"> <?php echo form_error('adresse'); ?></span>
            </div> 
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php echo $form['particulier']['ville']['label'] ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_input($form['particulier']['ville']) ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="error"> <?php echo form_error('ville'); ?></span>
            </div> 
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php echo $form['particulier']['tel']['label'] ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_input($form['particulier']['tel']) ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="error"> <?php echo form_error('tel'); ?></span>
            </div> 
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php echo $form['particulier']['assurance']['label'] ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_input($form['particulier']['assurance']) ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="error"> <?php echo form_error('assurance'); ?></span>
            </div> 
        </div>





        <?php
        echo form_input($form['particulier']['type']);
        ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center">
            <?php
            echo form_submit('envoi', 'Valider', 'class="bouton"');

            echo form_close();
            ?>
        </div></div>
    <?php
// bloc pour formulaire d'inscription d'un professionnel
    echo '<div id="professionnel">';
    echo form_open('user/inscription');
    ?>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['professionnel']['nom']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<?php echo form_input($form['professionnel']['nom']) ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <span class="error"> <?php echo form_error('nom'); ?></span>
        </div> 
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['professionnel']['prenom']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<?php echo form_input($form['professionnel']['prenom']) ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <span class="error"> <?php echo form_error('prenom'); ?></span>
        </div> 
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['professionnel']['email']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<?php echo form_input($form['professionnel']['email']) ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <span class="error"> <?php echo form_error('email'); ?></span>
        </div> 
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['professionnel']['password']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<?php echo form_input($form['professionnel']['password']) ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <span class="error"> <?php echo form_error('password'); ?></span>
        </div> 
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['professionnel']['adresse']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<?php echo form_input($form['professionnel']['adresse']) ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <span class="error"> <?php echo form_error('adresse'); ?></span>
        </div> 
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['professionnel']['ville']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<?php echo form_input($form['professionnel']['ville']) ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <span class="error"> <?php echo form_error('ville'); ?></span>
        </div> 
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['professionnel']['cp']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<?php echo form_input($form['professionnel']['cp']) ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <span class="error"> <?php echo form_error('cp'); ?></span>
        </div> 
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['professionnel']['tel']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<?php echo form_input($form['professionnel']['tel']) ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <span class="error"> <?php echo form_error('tel'); ?></span>
        </div> 
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['professionnel']['siret']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<?php echo form_input($form['professionnel']['siret']) ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <span class="error"> <?php echo form_error('siret'); ?></span>
        </div> 
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['professionnel']['raison']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<?php echo form_input($form['professionnel']['raison']) ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <span class="error"> <?php echo form_error('raison'); ?></span>
        </div> 
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
            <p><?php echo $form['professionnel']['creation']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
<?php echo form_input($form['professionnel']['creation']) ?>
        </div>
        <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3"></div>
        <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
            <span class="error"> <?php echo form_error('creation'); ?></span>
        </div>
    </div>

<?php echo form_input($form['professionnel']['type']) ?>
    <br>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center">

        <?php
        echo form_submit('envoi', 'Valider', 'class="bouton"');

        echo form_close();
        ?>
    </div></div></div>

<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#part").slideToggle("fast");
        $("#part").click(function () {
            if ($("#professionnel").is(":visible")) {
                $("#professionnel").slideToggle("slow");
                $("#part").slideToggle("slow");
                $("#pro").slideToggle("slow");
                $("#particulier").slideToggle("slow");
            }
        });
        $("#pro").click(function () {
            if ($("#particulier").is(":visible")) {
                $("#particulier").slideToggle("slow");
                $("#part").slideToggle("slow");
                $("#pro").slideToggle("slow");
                $("#professionnel").slideToggle("slow");
            }
        });
    });
</script>



