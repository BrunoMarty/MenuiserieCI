

<div class="row">
    <div id ="reservation" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 reserv">
        <div class="center">
            <?php
// On fait une boucle pour créer un lien correspondant à chaque mois de l'année
            for ($i = 1; $i <= 12; $i++) {
                ?>
                <a href='<?php echo "?m=$i&a=$a" ?>' >
                    <?php echo substr($mnom[$i], 0, 1) ?> 
                </a>
                <?php
                if ($i < 12)
                    echo "-";
            }
            ?>
            <br/><br/>
            <?php
// On fait toutes les verifications afin de créer le lien vers le mois précédents
            if (($m == 1 && $a <= 1970) == false) {
                if ($m == 1) {
                    $an = $a - 1;
                    $mois = 12;
                } else {
                    $an = $a;
                    $mois = $m - 1;
                }
                ?><a href='?m=<?php echo "$mois&a=$an" ?>'><<</a>
                <?php
            }

            echo $mnom[$m] . " " . $a;
// On fait toutes les vérifications afin de créer le lien vers le mois suivant
            if ($m == 12) {
                $an = $a + 1;
                $mois = 1;
            } else {
                $an = $a;
                $mois = $m + 1;
            }
// Lien vers le mois d'apres
            ?>
            <a href='?m=<?php echo "$mois&a=$an" ?>'>>></a>
        </div>
        <table class="table table-bordered"><tr class="paire">
                <td width=70>L</td><td width=70>M</td><td width=70>M</td><td width=70>J</td><td width=70>V</td><td width=70>S</td><td width=70>D</td>
                <?php
                for ($i = 1; $i <= $jours_a_afficher; $i++) {
                    if ($i % 7 == 1) {
                        ?>
                    </tr><tr> 
                        <?php
                    }
                    if ($i < ($jours_in_month + $dayone) && $i >= $dayone) {
                        $d = $i - $dayone + 1;
                        ?>
                        <td width=70><a class='jour' href='reserver/getDay/<?php echo "$d/$m/$an" ?>'><?php echo $d ?></a></td><?php
                    } else {
                        ?><td>&nbsp;</td><?php
                        }
                    }
                    ?>
        </table>
        <label>Debut : </label><input id="deb" name="deb" type="time" value="09:00" >
        <label>Fin : </label><input id="fin" name="fin" type="time">
        <button id='bookbutton'>Reserver</button>
    </div>


    <div id="div_result" class="pull-right reserv col-xs-8 col-sm-8 col-md-8 col-lg-8"><h3></h3>

       

            <!--<form method = "post" name = "monform" id = "monform" action = "#">-->
<!--            <?php // foreach ($machines as $key => $machine): ?>    
                <label class="checkbox checkbox-inline"><input name = "Choix[]" value = "<?php //  echo $key+1; ?>" type = "checkbox"><?php //  echo $machine['nom']; ?></label>
            <?php // endforeach; ?>

            <div class="checkbox checkbox-inline">
                <label><input onclick="CocheTout(this, 'Choix[]');" type="checkbox">Cocher/décocher tout</label>
            </div>-->
                 <table id="creneaux" class="table table-striped header-fixed " style="overflow-x:scroll;">
            <!--</form>-->
            <thead>
            <td></td><td></td>
                <?php
           
            foreach ($machines as $key => $machine): ?>
                 
            <td id="<?php echo $machine['id'] ?>" class="machines"><?php echo $machine['nom'] ?></td>
            <?php   
            endforeach;
            ?>
            </thead>
            <?php
            foreach ($horaires as $key => $horaire):
                
                if ($key != 0 && $heure_fin != $horaire['heure_debut']) {
                    ?>
                    <tr style="background-color: rgba(0,0,0,0.5);color:white;">
                        <td><?php echo $heure_fin."h"; ?></td>
                        <td>Fermé</td>
                    </tr>
                        <?php
                        if($heure_fin - $horaire['heure_debut'] <1 ){ ?>
                             <tr style="background-color: rgba(0,0,0,0.5);color:white;">
                                 <td></td>
                             </tr>
                        <?php }
                }
                
                    for ($index = $horaire['heure_debut']; $index < $horaire['heure_fin']; $index++) {
                        ?>


                    <tr id ="<?php echo $index; ?>">
                        <?php
                        for ($i = 0; $i < count($machines) ; $i++) {
                            if ($i == 0) {
                                ?>
                                <td><?php echo $index."h"?></td>
                            <?php } else { ?>
                                <td></td>
                            <?php
                            }
                        }
                        ?>
                    </tr><tr> 
                        <?php for ($i = 0; $i < count($machines) + 1; $i++) { ?>
                            <td></td>
                        <?php }
                        ?> </tr> <?php
                }
                $heure_fin = $horaire['heure_fin'];
                
            endforeach;
            ?>
        </table>
    </div></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/ajax.js" ></script>





