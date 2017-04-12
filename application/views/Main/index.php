<h1>La Menuiserie Collaborative</h1>

<?php
echo '<div id="corps"><div class="center">';
// On fait une boucle pour créer un lien correspondant à chaque mois de l'année
for ($i = 1; $i <= 12; $i++) {
    echo"<a href='?m=$i&a=$a'>" . substr($mnom[$i], 0, 1) . "</a>";
    if ($i != 12)
        echo" - ";
}
echo '<br/><br/></div><font size=4><div class="center">';
// On fait toutes les verifications afin de créer le lien vers le mois précédents
if (($m == 1 && $a <= 1970) == false) {
    if ($m == 1) {
        $an = $a - 1;
        $mois = 12;
    } else {
        $an = $a;
        $mois = $m - 1;
    }
    echo"<a href='?m=$mois&a=$an'><<</a>&nbsp;";
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
echo"&nbsp;<a href='?m=$mois&a=$an'>>></a>"; 
echo '</font>';
echo '</div><table class="calendrier" cellspacing=0><tr class="paire">';
echo '<td width=70>L</td><td width=70>M</td><td width=70>M</td><td width=70>J</td><td width=70>V</td><td width=70>S</td><td width=70>D</td>';
for ($i = 1; $i <= $jours_a_afficher; $i++) {
    if ($i % 7 == 1) {
        echo'</tr><tr>';
    }
    if ($i < ($jours_in_month + $dayone) && $i >= $dayone) {
        $a = $i - $dayone + 1;
        echo "<td width=70><a href=\"\">" . $a . " </a></td>";
    } else {
        echo "<th bgcolor=silver>&nbsp;</td>";
    }
}
echo "</table></div>";
?>