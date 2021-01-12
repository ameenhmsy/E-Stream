<!DOCTYPE html>
<html lang="fr">

   <head>
      <meta charset="utf-8" />
      <title>E-Stream</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
      <link rel="stylesheet" href="./css/index.css" />
      <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
      <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="./js/index.js"></script>
   </head>

   <body>
      <!-- Nav -->
      <nav class="navbar navbar-default navbar-expand-lg navbar-light">
         <div class="navbar-header">
            <a class="navbar-brand" href="./index.php">E-<b>Stream<img id="logo" src="./image/logo.jpg" alt="logo"
                       class="circle responsive-img" /></b>
            </a>
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
               <span class="navbar-toggler-icon"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
         </div>
         <!-- Collection of nav links, forms, and other content for toggling -->
         <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
               <!-- <li><a href="#">Home</a></li>               
               <li><a href="#">Blog</a></li> -->
               <li><a href="./page/contact.php">Contact</a></li>
               <li><a href="./page/apropos.php">À propos</a></li>
               <!-- <li class="active"><a href="#">Pricing</a></li> -->
               <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">Catégorie <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li><a href="#">Action</a></li>
                     <li><a href="#">Comédie</a></li>
                     <li><a href="#">Drame</a></li>
                     <li><a href="#">Humour</a></li>
                  </ul>
               </li>
            </ul>
            <!-- <form class="navbar-form form-inline">
               <div class="input-group search-box">
                  <input
                     type="text"
                     id="search"
                     class="form-control"
                     placeholder="Search here..."
                  />
                  <span class="input-group-addon"
                     ><i class="material-icons">&#xE8B6;</i></span
                  >
               </div>
            </form> -->
            <ul class="nav navbar-nav navbar-right">
               <li>
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                     <b>Connexion</b> </a>&nbsp; <ul class="dropdown-menu form-wrapper">
                     <li>
                        <!-- Form Connexion --------------------------------------------------------- -->
                        <form name="formC" id="formC" action="./serveur/membres/connexionMembre.php" method="post">
                           <!-- <p class="hint-text">Sign in with your social media account</p>
                           <div class="form-group social-btn clearfix">
                              <a href="#" class="btn btn-primary pull-left"
                                 ><i class="fa fa-facebook"></i> Facebook</a
                              >
                              <a href="#" class="btn btn-info pull-right"
                                 ><i class="fa fa-twitter"></i> Twitter</a
                              >
                           </div>
                           <div class="or-seperator"><b>or</b></div> 
                           <div class="form-group">
                              <input
                                 type="text"
                                 class="form-control"
                                 placeholder="Username"
                                 required="required"
                              />
                           </div> -->
                           <div class="form-group">
                              <input type="email" name="emailC" id="emailC" class="form-control" placeholder="Email"
                                     required="required" />
                           </div>
                           <div class="form-group">
                              <input type="password" name="passwdC" id="passwdC" class="form-control" placeholder="Mot de passe"
                                     required="required" />
                           </div>
                           <input type="submit" class="btn btn-primary btn-block" value="Connexion" />
                           <div class="form-footer">
                              <a href="#">Mot de passe oublié?</a>
                           </div>
                        </form>
                        <!-- Fin Connexion --------------------------------------------------------- -->
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Devenir
                     Membre</a>
                  <ul class="dropdown-menu form-wrapper">
                     <li>
                        <!-- Form Enregistrement --------------------------------------------------------- -->
                        <form name="formE" id="formE" action="./serveur/membres/enregistrementMembres.php" method="post">
                           <p class="hint-text">Créer Votre Compte</p>
                           <div class="form-group">
                              <input type="text" name="nomE" id="nomE" class="form-control" placeholder="Nom"
                                     required="required" />
                           </div>
                           <div class="form-group">
                              <input type="text" name="prenomE" id="prenomE" class="form-control" placeholder="Prenom"
                                     required="required" />
                           </div>
                           <div class="form-group">
                              <input type="email" name="emailE" id="emailE" class="form-control" placeholder="Email"
                                     required="required" />
                           </div>
                           <div class="form-group">
                              <input type="password" name="passwdE" id="passwdE" class="form-control"
                                     placeholder="Mot de passe 8 à 10 car" required="required" pattern="^[A-Za-z0-9-_]{8,10}$" />
                              <!-- RegExp  pattern="^[A-Za-z0-9-_]{8,10}$"   -->
                           </div>
                           <div class="form-group">
                              <input type="password" name="passwdE2" id="passwdE2" class="form-control"
                                     placeholder="Confirmer Mot de passe" required="required" />
                              <!--  RegExp -->
                           </div>
                           <div class="form-group">
                              <label class="checkbox-inline">
                                 <input type="radio" name="sexeE" value="femme" checked /> Femme </label>
                              <label class="checkbox-inline">
                                 <input type="radio" name="sexeE" value="homme" /> Homme </label>
                              <!-- <label class="checkbox-inline">
                                 <input type="checkbox" required="required" /> I accept
                                 the <a href="#">Terms &amp; Conditions</a>
                              </label> -->
                           </div>
                           <div class="form-group">
                              <input type="date" name="naissanceE" id="naissanceE" class="form-control" placeholder=""
                                     required="required" />
                           </div>
                           <input type="submit" id="submitE" class="btn btn-primary btn-block" value="Enregistrer" />
                        </form>
                        <!-- Fin Enregistrement --------------------------------------------------------- -->
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
      </nav>
      <!-- Nav -->
      <!-- ============================================================================================================ -->
      <div class="container">
         <div class="page-header ">
            <h1 class="text-center "> Bienvenue <small>sur E-<b>Stream</b></small>
            </h1>
         </div>
         <!-- Video Gallery - START -->
         <div class="container-fluid pb-video-container">
            <div class="col-md-10 col-md-offset-1">
               <h2>Recently Added Movies</h2>
               <div class="row pb-row">
                  <div class="col-md-4 pb-video">
                     <iframe autoplay muted class="pb-video-frame" width="100%" height="230" src="./donnees/video/Honest.mp4"
                             frameborder="0" allowfullscreen volume="0"></iframe>
                     <label class="form-control label-warning text-center">Honest</label>
                  </div>
                  <div class="col-md-4 pb-video">
                     <iframe class="pb-video-frame" width="100%" height="230" src="./donnees/video/Marraine-Ou-Presque.mp4"
                             frameborder="0" allowfullscreen></iframe>
                     <label class="form-control label-warning text-center">Marraine Ou Presque</label>
                  </div>
                  <div class="col-md-4 pb-video">
                     <iframe class="pb-video-frame" width="100%" height="230" src="./donnees/video/Safety.mp4" frameborder="0"
                             allowfullscreen volume=0 controls></iframe>
                     <label class="form-control label-warning text-center">Safety</label> <br>
                  </div>
                  <div class="col-md-4 pb-video">
                     <iframe class="pb-video-frame" width="100%" height="230" src="./donnees/video/Eau-Paisible.mp4"
                             frameborder="0" allowfullscreen volume=0 controls></iframe>
                     <label class="form-control label-warning text-center">Eau Paisible</label>
                  </div>
                  <div class="col-md-4 pb-video">
                     <iframe class="pb-video-frame" width="100%" height="230" src="./donnees/video/We-Can-Be-Heroes.mp4"
                             frameborder="0" allowfullscreen></iframe>
                     <label class="form-control label-warning text-center">We Can Be Heroes</label>
                  </div>
                  <div class="row pb-row">
                     <div class="col-md-4 pb-video">
                        <iframe class="pb-video-frame" width="100%" height="230" src="./donnees/video/Le-Tunnel.mp4"
                                frameborder="0" allowfullscreen></iframe>
                        <label class="form-control label-warning text-center">Le Tunnel</label> <br>
                     </div>
                  </div>
                  <div class="col-md-4 pb-video">
                     <iframe class="pb-video-frame" width="100%" height="230" src="./donnees/video/Fatale.mp4" frameborder="0"
                             allowfullscreen></iframe>
                     <label class="form-control label-warning text-center">Fatale</label>
                  </div>
                  <div class="col-md-4 pb-video">
                     <iframe class="pb-video-frame" width="100%" height="230" src="./donnees/video/Hunted.mp4" frameborder="0"
                             allowfullscreen></iframe>
                     <label class="form-control label-warning text-center">Hunted</label>
                  </div>
                  <!-- ------------------------------------------------------------------ -->
                  <div class="col-md-9">
                     <h2> </h2> <br>
                     <h2> Best Sellers Movies</h2>
                  </div>
                  <!-- ------------------------------------------------------------------ -->
                  <div class="col-md-4 pb-video">
                     <iframe class="pb-video-frame" width="100%" height="230" src="./donnees/video/Earth.mp4" frameborder="0"
                             allowfullscreen volume="0"></iframe>
                     <label class="form-control label-warning text-center.mp4">Earth</label>
                  </div>
                  <div class="col-md-4 pb-video">
                     <iframe class="pb-video-frame" width="100%" height="230" src="./donnees/video/Safety.mp4" frameborder="0"
                             allowfullscreen volume="0"></iframe>
                     <label class="form-control label-warning text-center">Safety</label>
                  </div>
                  <div class="col-md-4 pb-video">
                     <iframe class="pb-video-frame" width="100%" height="230" src="./donnees/video/We-Can-Be-Heroes.mp4"
                             frameborder="0" allowfullscreen volume="0">
                     </iframe>
                     <label class="form-control label-warning text-center">We Can Be Heroes</label> <br>
                  </div>
                  <div class="col-md-4 pb-video">
                     <iframe class="pb-video-frame" width="100%" height="230" src="./donnees/video/Le-Tunnel.mp4" frameborder="0"
                             allowfullscreen></iframe>
                     <label class="form-control label-warning text-center">Le Tunnel</label>
                  </div>
                  <!-- <div class="col-md-3 pb-video">
                     <iframe class="pb-video-frame" width="100%" height="230"
                             src="https://www.youtube.com/embed/UY1bt8ilps4?ecver=1" frameborder="0" allowfullscreen></iframe>
                     <label class="form-control label-warning text-center">F.O. and Peeva - Lichnata</label>
                  </div>
                  <div class="col-md-3 pb-video">
                     <iframe class="pb-video-frame" width="100%" height="230"
                             src="https://www.youtube.com/embed/Jr4TMIU9oQ4?ecver=1" frameborder="0" allowfullscreen></iframe>
                     <label class="form-control label-warning text-center">INNA - Gimme Gimme</label>
                  </div> -->
                  <!-- -- -->
               </div>
            </div>
         </div>
         <hr />
         <!-- Video Gallery - END -->

      </div>
      <br /><br />
      <footer class="footer mt-auto py-3 text-center">
         <div class="container text-center">
            <span class="text-muted">
               <a href="https://www.collegeahuntsic.qc.ca/"> Ahuntsic </a> © 2021</span>
         </div>
      </footer>
   </body>

</html>