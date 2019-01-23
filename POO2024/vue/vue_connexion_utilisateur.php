<?php
    if(isset($_SESSION['email']))
    {
        echo "<form method='post' action=''>
        <input type='submit' name='medeconnecter' value='Me Déconnecter' class='btn btn-primary'>
        </form>";
    }
    else
    {
?>
<div class="col-sm-12">
    <div class="main">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                <h1>Déjà membre ?</h1>
                <form method="post" action="index.php" role="form" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-6 col-sm-offset-3">
                            <h3>Adresse email</h3>
                            <input type="text" name="email" placeholder="Entrez votre email" maxlenght="20" class="form-control" required>
                            <h3>Mot de passe</h3>
                            <input type="password" name="mdp" placeholder="Entrez votre mot de passe" maxlenght="20" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-offset-3">
                            <input type="reset" name="annuler" value="Annuler" class="btn btn-primary"/>
                            <input type="submit" name="meconnecter" value="Me Connecter" class="btn btn-primary"/>
                        </div>
                    </div>
                </form>
                <h1>Nouveau membre ?</h1>
                <form method="post" action="index.php" role="form" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-6 col-sm-offset-3">
                            <p>Bonjour nouveau membre ! Si vous souhaitez revenir nous voir et que l’on vous reconnaisse, n’hésitez pas à vous inscrire !</p>
                            <input type="submit" name="creercompte" value="Créer mon compte" class="btn btn-primary"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    }
?>