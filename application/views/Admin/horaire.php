<?php
echo "<h1>$titre</h1>";
?>

<form method="POST"><table>

        <tr>
            <th>Debut</th>
            <th>Fin</th>
            <th>Statut</th>
        </tr>

        <?php
        foreach ($horaires as $horaire):


            echo '<tr><td><input type="text" name="debut_' . $horaire['id'] . '" value="' . $horaire['heure_debut'] . '"></td>';
            echo '<td><input type="text" name="fin_' . $horaire['id'] . '" value="' . $horaire['heure_fin'] . '"></td>';
            echo '<td><select name="statut_' . $horaire['id']. '"> <option ';
            if ($horaire['statut'] == 1) {
                echo "selected ";
            }
            echo 'value="1">Professionnel</option><option ';
            if ($horaire['statut'] == 2) {
                echo "selected ";
            }
            echo 'value="2">Particulier</option><option ';
            if ($horaire['statut'] == 3) {
                echo "selected ";
            }
            echo 'value="3">Pro & Particulier</option>                  
                  </select></td></tr>';

        endforeach;      
        ?>
    </table>
    
        <input type="submit" name="Modifier" value="modifier" />
        
</form>


