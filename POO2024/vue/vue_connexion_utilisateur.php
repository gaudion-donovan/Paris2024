<?php
    if(isset($_SESSION['email']))
    {
        echo "<form method='post' action=''>
        <input type='submit' name='medeconnecter' value='Me Déconnecter'>
        </form>";
    }
    else
    {
?>
<h1>Déjà membre ?</h1>
<form method="post" action="">
<table border=0>
    <tr>
        <th>Email</th>
        <td><input type="text" name="email"/></td>
    </tr>
    <tr>
        <th>mot de passe</th>
        <td><input type="password" name="mdp"/></td>
    </tr>
    <tr>
        <td><input type="reset" name="annuler" value="Annuler"/></td>
        <td><input type="submit" name="meconnecter" value="Me Connecter"/></td>
    </tr>
</table>
</form>
<h1>Nouveau membre ?</h1>
<p>Bonjour nouveau membre ! Si vous souhaitez revenir nous voir et que l’on vous reconnaisse, n’hésitez pas à vous inscrire !</p>
<form method="post" action="">
    <table border=0>
        <tr>
            <td><input type="submit" name="creercompte" value="Créer mon compte"/></td>
        </tr>
    </table>
</form>
<?php
    }
?>