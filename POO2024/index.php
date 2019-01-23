<?php
    session_start();
    $_SESSION['erreur'] = 0;
    $menu_select = 0;
    require_once ("controleur/controleur.class.php");
    require_once ("controleur/utilisateur.class.php");
    require_once ("controleur/evenement.class.php");
?>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Paris 2024</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="../img/LogoParis2024.ico" type="image/x-icon">
        <link rel="icon" href="../img/LogoParis2024.png" type="image/png">

        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Custom fonts for this template -->
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <center>
            <?php
                // instanciation du controleur
                $unC = new Controleur("localhost", "mabase", "root", "");
                // choix de la table
                $unC->setTable("utilisateur");

                if(isset($_SESSION['typecompte']) && $_SESSION['typecompte'] =="admin")
                {
                    // appel de la vue 
                    include ("vue/vue_admin.php");
                    
                    if(isset($_POST['utilisateur']))
                    {
                        $menu_select = 1;
                        // choix de la table
                        $unC->setTable("utilisateur");
                        // recuperation des données
                        $resultat = $unC->selectAll();
                        $lesUtilisateurs = array();
                        foreach($resultat as $unRES)
                        {
                            $unUser = new Utilisateur();
                            $unUser->renseigner($unRES);
                            $lesUtilisateurs[] = $unUser;
                        }
                        // appel de la vue 
                        include ("vue/vue_select_utilisateur.php");

                        if(isset($_GET['action']) && isset($_GET['idutil']))
                        {
                            $action = $_GET['action'];
                            $idutil = $_GET['idutil'];
                            switch($action)
                            {
                                case 'X':
                                    $id = array("idutil"=>$idutil);
                                    $unC->delete($id);
                                    break;
                                case 'E':
                                    $id = array("idutil"=>$idutil);
                                    $unC->update($id);
                                    break;
                            }
                        }
                    }

                    if(isset($_POST['evenement']))
                    {
                        $menu_select = 1;
                        // choix de la table
                        $unC->setTable("evenement");
                        // recuperation des données
                        $resultat = $unC->selectAll();
                        $lesEvenements = array();
                        foreach($resultat as $unRES)
                        {
                            $unEvent = new Evenement();
                            $unEvent->renseigner($unRES);
                            $lesEvenements[] =$unEvent;
                        }
                        // appel de la vue 
                        include ("vue/vue_select_evenement.php");
                    }
                    
                    if($menu_select == 0)
                    {
                        // appel de la vue 
                        include ("vue/vue_menu_select.php");
                    }
                }
                else if(isset($_SESSION['typecompte']) && $_SESSION['typecompte'] =="membre")
                {
                    include ("vue/vue_membre.php");
                }

                if(isset($_POST['valider']))
                {
                    $unUser = new Utilisateur();
                    $unUser->renseigner($_POST);
                    if($unUser->verif_mdp($_POST['confirm']))
                    {
                        $unC->insert($unUser->serialiser());
                        $_SESSION['erreur'] = 0;
                    }
                    else
                    {
                        $_SESSION['erreur'] = 1;
                    }
                }

                // appel de la vue 
                if(isset($_POST['creercompte']) || isset($_SESSION['erreur']) && $_SESSION['erreur'] == 1)
                {
                    include ("vue/vue_inscription_utilisateur.php");
                    if($_SESSION['erreur'] == 1)
                    {
                        echo "
                        <div class='container'>
                            <div class='col-md-6 col-sm-offset-3'>
                                <div class='alert alert-warning'>
                                    <strong>Echec: </strong> Veuillez vérifier votre mot de passe
                                </div>
                            </div>
                        </div>";
                    }
                }
                else if (!isset($_SESSION['email']))
                {
                    include ("vue/vue_connexion_utilisateur.php");
                }
                
                if (isset($_SESSION['email']))
                {
                    echo "<form method='post' action=''>
                    <input type='submit' name='medeconnecter' value='Me Déconnecter' class='btn btn-primary'>
                    </form>";
                }

                
                if(isset($_POST['meconnecter']))
                {
                    $where = array("email"=>$_POST['email'], "mdp"=>$_POST['mdp']);
                    $resultat = $unC->selectWhere($where);
                    if(isset($resultat['email']))
                    {
                        $_SESSION["nom"] = $resultat['nom'];
                        $_SESSION["prenom"] = $resultat['prenom'];
                        $unUser = new Utilisateur();
                        $unUser->renseigner($resultat);
                        $_SESSION['email'] = $unUser->getEmail();
                        $_SESSION['idutil'] = $unUser->getIdUtil();
                        $_SESSION['typecompte'] = $unUser->getTypeCompte();
                        header("Location: index.php");
                    }
                    else
                    {
                        echo "
                        <div class='container'>
                            <div class='col-md-6 col-sm-offset-3'>
                                <div class='alert alert-warning'>
                                    <strong>Attention: </strong> Veuillez vérifier vos identifiants !
                                </div>
                            </div>
                        </div>";
                    }
                }

                if(isset($_POST['medeconnecter']))
                {
                    unset($_SESSION['email']);
                    unset($_SESSION['idutil']);
                    session_unset();
                    session_destroy();
                }

            ?>
        </center>
    </body>
</html>
