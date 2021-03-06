<!--                                                                              --> 
<!-- Projet : Paris 2024                                                          --> 
<!--                                                                              --> 
<!-- Auteur : Jourquin Cédric, Gaudion Donovan  | date: 08/11/2018                -->
<!--                                                                              --> 
<!-- nom du fichier : index.html                                                  -->
<!--                                                                              --> 

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Paris 2024</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/LogoParis2024.ico" type="image/x-icon">
    <link rel="icon" href="img/LogoParis2024.png" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Bootstrap core JS -->
    <link href="vendor/bootstrap/js/bootstrap.min.js" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
    
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="img/Paris2024.png" width="30" height="30">
          Paris 2024
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">Evenements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">Equipes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">Sports</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Enquete1.html">Enquête</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">A propos</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <form method='post' action=''> 
              <input type="submit" value="Connexion" name="redirection_co" class="btn btn-primary"/>
              <?php 
                if(isset($_POST['redirection_co']))
                {
                  header("Location: POO2024/index.php");
                }
              ?>
            </form>
          </ul> 
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            
            <div class="item active">
              <img src="img/Paris.jpg" alt="Photo 1" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/Paris-2.jpg" alt="Photo 2" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/Paris-3.jpg" alt="Photo 3" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/Paris-4.jpg" alt="Photo 4" style="width:100%;">
            </div>

            <div class="item">
              <img src="img/Paris-5.jpg" alt="Photo 5" style="width:100%;">
            </div>

          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container-fluid text-center">
      <div class="row content">
        <div class="col-sm-2 sidenav">
            <!-- Météo -->
            <div id="cont_NzUwNTZ8MnwxfDJ8MXwwMGE4ZTB8MnxGRkZGRkZ8Y3wx">
              <div id="spa_NzUwNTZ8MnwxfDJ8MXwwMGE4ZTB8MnxGRkZGRkZ8Y3wx">
                <a id="a_NzUwNTZ8MnwxfDJ8MXwwMGE4ZTB8MnxGRkZGRkZ8Y3wx" href="http://www.meteocity.com/france/paris_v75056/" target="_blank" style="color:#333;text-decoration:none;">Météo</a> 
                <a href="http://www.meteocity.com"> Paris</a>
              </div>
              <script type="text/javascript" src="http://widget.meteocity.com/js/NzUwNTZ8MnwxfDJ8MXwwMGE4ZTB8MnxGRkZGRkZ8Y3wx"></script>
            </div>
            <br/>
            <!-- Agenda -->
            <iframe src="http://winky.fr/winky_widget_calendar/?wid=0&m=07&y=2024" style="width: 200px; height: 200px; border: none;"></iframe>
            <div>
              <br/>
              <!-- PUB -->
              <a href="https://youtu.be/NEdt23nJUhw"><img src="img/pub.jpeg" title="pub Paris2024" width="200" height="150"/></a>
            </div>
        </div>
        <div class="col-sm-8 text-center"> 
          <h1>Bienvenue dans le futur des Jeux Olympiques </h1>

          <h3>Paris 2024</h3>
              
          <p>L’ambition de Paris 2024 est de partager le rêve olympique et paralympique avec le plus grand nombre
            en offrant au monde des festivités dignes du patrimoine exceptionnel de Paris,
            symbole d’innovation et d’élégance.

            Tout ce qui caractérise Paris – l’art, l’architecture, la gastronomie, la culture, la mode, la musique –
            participera à cette fête unique.

            Grâce à un fan trail le long de la Seine, c’est toute la ville qui sera offerte au monde,
            proposant de nombreux divertissements et célébrations</p>
        </div>
        <div class="col-sm-2 sidenav">
          <div class="well">
            <p>Partenaires</p>
            <a href="https://group.bnpparibas"><img src="img/bnp.jpg" title="BNP Paribas" width="100" height="100"/></a>
            <a href="https://www.groupefdj.com/groupe.html"><img src="img/fdj.jpg" title="FDJ" width="100" height="100"/></a>
            <a href="https://www.groupelaposte.com/fr"><img src="img/laposte.jpg" title="LaPoste" width="100" height="100"/></a>
            <a href="https://www.paris2024.org/fr/article/partenaires-officiels" title="Plus"><p>+</p></a>
            <style>a:hover{text-decoration: none;}</style>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="https://twitter.com/paris2024">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://fr-fr.facebook.com/Paris2024/">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Paris2024</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
