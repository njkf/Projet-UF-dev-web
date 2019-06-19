<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jules Vendée</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- Custom styles -->
  <link href="css/cv_style.css" rel="stylesheet">

</head>

<body id="page-top">


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">CV connecté</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#parcours">Parcours</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#competences">Compétences</a>
          </li>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#projects">Projets</a>
            </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php" target='blank'>Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Jules Vendee</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Etudiant en informatique</h2>
      </div>
    </div>
  </header>
  
  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">A propos de moi</h2>
          <div class="text-white-50">
          <p>
            
            <?php
            $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
            $reponse = $bdd->query('SELECT * FROM profil');
            while ($donnees = $reponse->fetch()){
                     echo $donnees['desciption'];}
            ?>
            </p>
         </div>
       </div>
        
      </div>
    </div>
  </section>



  <div id="parcours">
    <h2 id="title">
        Parcours
    </h2>
    <div class="row">
        <div class="col-md-12">
            <div class="description-title">
                <h3>Expériences professionnelles</h3>
            </div>
            <div class="description">
                <ul class="chrono">
                    
                    <li class="chrono_inverted">
                        <div class="date">
                            <span class="month">

                            <p>
                            <?php
                            $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                            $reponse = $bdd->query('SELECT * FROM Experience_pro WHERE id=1');
                            while ($donnees = $reponse->fetch()){
                            echo $donnees['dateexp'];}
                            ?>
                            </p>

                            </span>
                        </div>

                        <div class="chrono_panel wow fadeInUp animated animated" style="visibility: visible;">
                            <div class="chrono_content">
                                <div class="chrono_head">
                                    <h3><p>

                                    <?php
                                    $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                    $reponse = $bdd->query('SELECT * FROM Experience_pro WHERE id=1');
                                    while ($donnees = $reponse->fetch()){
                                    echo $donnees['titreexp'];}
                                    ?>

                                    </p></h3>
                                    
                                </div>

                                <div class="chrono_body">
                                    <p><?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM Experience_pro WHERE id=1');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['descriptionexp'];}
                                      ?></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="date">
                            <span class="month">
                            <?php
                            $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                            $reponse = $bdd->query('SELECT * FROM Experience_pro WHERE id=2');
                            while ($donnees = $reponse->fetch()){
                            echo $donnees['dateexp'];}
                            ?></p>
                            </span>
                        </div>

                        <div class="chrono_panel wow fadeInUp animated animated" style="visibility: visible;">
                            <div class="chrono_content">
                                <div class="chrono_head">
                                    <h3>

                                    <p>
                                    <?php
                                    $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                    $reponse = $bdd->query('SELECT * FROM Experience_pro WHERE id=2');
                                    while ($donnees = $reponse->fetch()){
                                    echo $donnees['titreexp'];}
                                    ?>
                                    </p>

                                    </h3>
                                </div>

                                <div class="chrono_body">
                                    <p><?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM Experience_pro WHERE id=2');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['descriptionexp'];}
                                      ?></p>
                                </div>
                            </div> 
                        </div>
                    </li>                                                                                                    
                </ul>
            </div>

            <div class="description-title">
                <h3>Diplômes</h3>
            </div>
            <div class="description">
                <ul class="chrono">
                    
                    <li class="chrono_inverted">
                        <div class="date">
                            <span class="month">
                                   <?php
                                    $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                    $reponse = $bdd->query('SELECT * FROM diplomes WHERE id=1');
                                    while ($donnees = $reponse->fetch()){
                                    echo $donnees['datedip'];}
                                    ?>
                                    </p>
                                    </span>
                        </div>

                        <div class="chrono_panel wow fadeInUp animated animated" style="visibility: visible;">
                            <div class="chrono_content">
                                <div class="chrono_head">
                                    <h3>
                                    <?php
                                    $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                    $reponse = $bdd->query('SELECT * FROM diplomes WHERE id=1');
                                    while ($donnees = $reponse->fetch()){
                                    echo $donnees['titredip'];}
                                    ?>
                                    </h3>
                                    
                                </div>

                                <div class="chrono_body">
                                    <p><?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM diplomes WHERE id=1');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['descriptiondip'];}
                                      ?></p>
                                </div>
                            </div> 
                        </div>
                    </li>
                    
                    <li>
                        <div class="date">
                            <span class="month">
                                    <?php
                                    $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                    $reponse = $bdd->query('SELECT * FROM diplomes WHERE id=2');
                                    while ($donnees = $reponse->fetch()){
                                    echo $donnees['datedip'];}
                                    ?>
                                    </p></span>
                        </div>

                        <div class="chrono_panel wow fadeInUp animated animated" style="visibility: visible;">
                            <div class="chrono_content">
                                <div class="chrono_head">
                                    <h3>
                                    <?php
                                    $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                    $reponse = $bdd->query('SELECT * FROM diplomes WHERE id=2');
                                    while ($donnees = $reponse->fetch()){
                                    echo $donnees['titredip'];}
                                    ?>
                                    </h3>
                                    
                                </div>

                                <div class="chrono_body">
                                    <p><?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM diplomes WHERE id=2');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['descriptiondip'];}
                                      ?></p>
                                </div>
                            </div> 
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


  <!-- Projects Section -->
  <section id="competences" class="projects-section bg-light">
    <div class="container">
        <h2 id="title">
            Compétences
        </h2>
        <p><?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM competences WHERE id=1');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['langage'];}
                                      ?></p>
        <div class="w3-light-grey">
          <div class="w3-container w3-section w3-green w3-center" style="width:<?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM competences WHERE id=1');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['note'];}
                                      ?>%"><?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM competences WHERE id=1');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['note'];}
                                      ?>%</div>
        </div>
        <p><?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM competences WHERE id=2');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['langage'];}
                                      ?></p>
        <div class="w3-light-grey">
          <div class="w3-container w3-section w3-blue w3-center" style="width:<?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM competences WHERE id=2');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['note'];}
                                      ?>%"><?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM competences WHERE id=2');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['note'];}
                                      ?>%</div>
        </div>
        <p><?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM competences WHERE id=3');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['langage'];}
                                      ?></p>
        <div class="w3-light-grey"> 
          <div class="w3-containerw3-section  w3-red w3-center" style="width:<?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM competences WHERE id=3');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['note'];}
                                      ?>%"><?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM competences WHERE id=3');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['note'];}
                                      ?>%</div>
        </div>
        <p><?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM competences WHERE id=4');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['langage'];}
                                      ?></p>
        <div class="w3-light-grey">
          <div class="w3-container w3-section w3-yellow w3-center" style="width:<?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM competences WHERE id=4');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['note'];}
                                      ?>%"><?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM competences WHERE id=4');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['note'];}
                                      ?>%</div>
        </div>
        <p><?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM competences WHERE id=5');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['langage'];}
                                      ?></p>
        <div class="w3-light-grey">
          <div class="w3-container w3-section w3-deep-purple w3-center" style="width:<?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM competences WHERE id=5');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['note'];}
                                      ?>%"><?php
                                      $bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
                                      $reponse = $bdd->query('SELECT * FROM competences WHERE id=5');
                                      while ($donnees = $reponse->fetch()){
                                      echo $donnees['note'];}
                                      ?>%</div>
        </div>

  <section id="projects" class="projects-section bg-light">
      <h2 id="title">
        Projets
      </h2>
      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/plante.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Plante connectée</h4>
                <p class="mb-0 text-white-50">Un projet de groupe mellant l'IOT, la gestion debase de données et la création d'une application.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">2ème Projet</h4>
                <p class="mb-0 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




<div id="contact">
<h2 id="title">
        Contact
</h2>

<a  target="_blank" href="contact.php" class="btn_contact" width="100%"> <input type="submit" id="contact" value="Me contacter"> </a> 

</div>



  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Addresse</h4>
              
              <div class="small text-black-50">Bordeaux, France</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              
              <div class="small text-black-50">
                <a href="#">Jules.vendee@ynov.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Telephone</h4>
              
              <div class="small text-black-50">06 41 05 53 49</div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Jules Vendee 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>
					