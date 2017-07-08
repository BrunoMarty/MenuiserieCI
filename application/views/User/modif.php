<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 bloc">
    <div  class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div  class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <h1><?php echo $title ?></h1>
    </div>
    <div  class="col-xs-2 col-sm-2 col-md-2 col-lg-2 deco">
        <a href='<?php echo site_url('user/disconnect') ?>'>Déconnexion</a>
    </div>
    <?php
    echo form_open('user/account');
    ?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['nom']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <?php echo form_input($form['nom']); ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['prenom']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <?php echo form_input($form['prenom']); ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['email']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <?php echo form_input($form['email']); ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['adresse']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <?php echo form_input($form['adresse']); ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['ville']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <?php echo form_input($form['ville']); ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['cp']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <?php echo form_input($form['cp']); ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $form['tel']['label'] ?></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <?php echo form_input($form['tel']); ?>
        </div>
    </div>


    <?php
    if (isset($_SESSION['user']['siret'])) {
        ?>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php echo $form['siret']['label'] ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_input($form['siret']); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php echo $form['raison']['label'] ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_input($form['raison']); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php echo $form['creation']['label'] ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_input($form['creation']); ?>
            </div>
        </div>
        <?php
        echo form_input($form['type']);
    } else {
        ?>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php echo $form['assurance']['label'] ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_input($form['assurance']); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p><?php echo $form['date_naissance']['label'] ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <?php echo form_input($form['date_naissance']); ?>
            </div></div>
            <?php
            echo form_input($form['type']);
            
        }
        ?>

    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center">
        <?php
        echo form_submit('envoi', 'Valider', 'class="bouton"');
        ?>
    </div>

<?php echo form_close(); ?>
</div>

