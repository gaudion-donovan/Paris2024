<?php
    // affichage des résultats
    echo "<h2>Liste des evenements</h2>
    <table border=0>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Action</th>
        </tr>";
    foreach($lesEvenements as $unEvent)
    {
    echo $unEvent->afficher();
    }
    echo "</table>";
?>