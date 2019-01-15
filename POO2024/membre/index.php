<?php
    session_start();
    //require_once ("controleur/controleur.class.php");
    //require_once ("controleur/membre.class.php");
?>
<html>
   <head>
   </head>
   <body>
    <center>
        <?php
            include ("vue/vue_connexion_utilisateur.php");
            include ("vue/vue_membre.php");
            if(isset($_POST['medeconnecter']))
            {
                unset($_SESSION['email']);
                unset($_SESSION['idutil']);
                session_destroy();
                header("Location: ../index.php");
            }
        ?>
    </center>
   </body> 
</html>