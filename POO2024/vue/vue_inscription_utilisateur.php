<div class="col-sm-12">
    <div class="main">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                <h1>Créer mon compte membre</h1>
                <form method="post" action="index.php" role="form" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-6 col-sm-offset-3">
                            <h3>Nom</h3>
                            <input type="text" name="nom" placeholder="Entrez votre nom" maxlenght="20" class="form-control" required>
                            <h3>Prénom</h3>
                            <input type="text" name="prenom" placeholder="Entrez votre prénom" maxlenght="20" class="form-control" required>
                            <h3>Adresse email</h3>
                            <input type="text" name="email" placeholder="Entrez votre email" maxlenght="20" class="form-control" required>
                            <h3>Mot de passe</h3>
                            <input type="password" name="mdp" placeholder="Entrez votre mot de passe" maxlenght="20" class="form-control" required>
                            <h3>Confirmation</h3>
                            <input type="password" name="confirm" placeholder="Entrez votre mot de passe" maxlenght="20" class="form-control" required>
                            <h3>Type Compte</h3>
                            <select name="typecompte" class="form-control">
                                <option value ="admin">Administrateur</option>
                                <option value ="membre">Membre</option>
                                <option value ="autre">Autre</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-offset-3">
                            <input type="reset" name="annuler" value="Annuler" class="btn btn-primary"/>
                            <input type="submit" name="valider" value="Valider" class="btn btn-primary"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>