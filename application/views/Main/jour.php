<h1>La Menuiserie Collaborative</h1>

<p><?php

echo $njour[date("w", mktime(0, 0, 0, $mois, $jour, $année))]. " ". "$jour $nmois[$mois] $année";


?></p>
