<?php
echo "<h1>$title</h1>";

foreach ($reservations as $reservation):
    $duree = $reservation['heure_fin'] - $reservation['heure_debut'];
    $encours = $reservation['heure_fin'] - $heure;
    $pourcentage = (1 - $encours / $duree) * 100;
    $client = "";
    if ($reservation['fk_particulier'] != NULL) {
        foreach ($particuliers as $particulier):
            if ($particulier['id'] == $reservation['fk_particulier'])
                $client = $particulier;
            
        endforeach;
    }elseif ($reservation['fk_professionnel'] != NULL) {
        foreach ($professionnels as $professionnel):
            if ($professionnel['id'] == $reservation['fk_particulier'])
                $client = $professionnel;
        endforeach;
    }
    
    if($encours < 0.25)
        $couleur = "danger";
    elseif($encours < 0.5)
        $couleur = "warning";
    else 
        $couleur = "success";

    var_dump($duree - $encours);
    if (strpos($reservation['heure_fin'], '.')) {
        $h_fin = explode('.', $reservation['heure_fin']);
        $h_fin = $h_fin[0] . "h" . round($h_fin[1] * 60 / 100);
    } else {
        $h_fin = $reservation['heure_fin'] . 'h';
    }

    if (strpos($reservation['heure_debut'], '.')) {
        $h_debut = explode('.', $reservation['heure_debut']);
        $h_debut = $h_debut[0] . "h" . round($h_debut[1] * 60 / 100);
    } else {
        $h_debut = $reservation['heure_debut'] . 'h';
    }

    if (strpos($heure, '.')) {
        $h = explode('.', $encours);
        if ($h[0] < 1)
            $h = round($h[1] * 60 / 100) . "min";
        else
            $h = $h[0] . "h" . round($h[1] * 60 / 100);
    }else {
        $h = $encours . 'h';
    }
    ?>
    <div class="progress">
        <div class="progress-bar progress-bar-<?php echo $couleur ?>" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $pourcentage; ?>%;">
            <?php echo $client['nom']." ".$client['prenom']; ?>
        </div>
        <?php echo '&nbsp'.$h; ?>
    </div>
    <span class='debut'><?php echo $h_debut ?></span>
    <span class='fin'><?php echo $h_fin ?></span>
<br><br><br>
    <?php 
endforeach;
?>




