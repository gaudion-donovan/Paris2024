<?php
    // affichage des résultats
    echo "<h2>Liste des utilisateurs</h2>
        <table border=0>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Type Compte</th>
                <th>Action</th>
            </tr>";
    foreach($lesUtilisateurs as $unUser)
    {
        echo $unUser->afficher();
    }
    echo "</table>";
?>