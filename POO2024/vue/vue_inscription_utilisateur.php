<h1>Créer mon compte membre</h1>
<form method="post" action="">
    <table border=0>
        <tr>
            <th>Nom</th>
            <td><input type="text" name="nom"/></td>
        </tr>
        <tr>
            <th>Prénom</th>
            <td><input type="text" name="prenom"/></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" name="email"/></td>
        </tr>
        <tr>
            <th>mot de passe</th>
            <td><input type="password" name="mdp"/></td>
        </tr>
        <tr>
            <th>Confirmation</th>
            <td><input type="password" name="confirm"/></td>
        </tr>
        <tr>
            <th>Type Compte</th>
            <td>
                <select name="typecompte">
                    <option value ="admin">Administrateur</option>
                    <option value ="membre">Membre</option>
                    <option value ="autre">Autre</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="reset" name="annuler" value="Annuler"/></td>
            <td><input type="submit" name="valider" value="Valider"/></td>
        </tr>
    </table>
</form>