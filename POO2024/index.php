<?php
    session_start();
    require_once ("controleur/controleur.class.php");
    require_once ("controleur/utilisateur.class.php");
?>
<html>
    <head>
    </head>
    <body>
        <center>
            <?php
                // instanciation du controleur
                $unC = new Controleur("localhost", "mabase", "root", "");
                // choix de la table
                $unC->setTable("utilisateur");
                
                if(isset($_POST['creercompte']))
                {
                    include ("vue/vue_inscription_utilisateur.php");
                }
                else
                {
                    include ("vue/vue_connexion_utilisateur.php");
                }

                if(isset($_POST['valider']))
                    {
                        $unUser = new Utilisateur();
                        $unUser->renseigner($_POST);
                        if($unUser->verif_mdp($_POST['confirm']))
                        {
                            $unC->insert($unUser->serialiser());
                        }
                        else
                        {
                            echo "Echec | Veuillez vérifier votre mot de passe";
                        }
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
                        if($unUser->getTypeCompte()=="admin")
                        {
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
                           
                            header("Location: index.php");
                        }
                        else
                        {
                            header("Location: membre/index.php");
                        }
                    }
                    else
                    {
                        echo "Veuillez vérifier vos identifiants !";
                    }
                }
               // var_dump($_SESSION);
                if(isset($_SESSION['typecompte']) && $_SESSION['typecompte'] =="admin")
                {
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
                                break;
                        }
                    }
                }

                if(isset($_POST['medeconnecter']))
                {
                    unset($_SESSION['email']);
                    unset($_SESSION['idutil']);
                    session_destroy();
                }
            ?>
        </center>
    </body>
</html>
