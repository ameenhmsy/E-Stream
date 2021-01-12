<!DOCTYPE html>
<html lang="fr">

   <head></head>
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
                  <input type="text" id="search" class="form-control" placeholder="Search here..."/>
                  <span class="input-group-addon"> <i class="material-icons">&#xE8B6;</i> </span>
               </div>
            </form> -->
            <ul class="nav navbar-nav navbar-right">
               <li>
                  <a id="deconnx" class="btn btn-primary btn-lg get-started-btn mt-1 mb-1" href="#"> <b> X</b> </a>
               </li>
               <li>
                  <a id="connx" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1" href="#">
                     <b id="conn">&nbsp;CONNEXION &nbsp;<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-unlock"
                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd"
                                 d="M9.655 8H2.333c-.264 0-.398.068-.471.121a.73.73 0 0 0-.224.296 1.626 1.626 0 0 0-.138.59V14c0 .342.076.531.14.635.064.106.151.18.256.237a1.122 1.122 0 0 0 .436.127l.013.001h7.322c.264 0 .398-.068.471-.121a.73.73 0 0 0 .224-.296 1.627 1.627 0 0 0 .138-.59V9c0-.342-.076-.531-.14-.635a.658.658 0 0 0-.255-.237A1.122 1.122 0 0 0 9.655 8zm.012-1H2.333C.5 7 .5 9 .5 9v5c0 2 1.833 2 1.833 2h7.334c1.833 0 1.833-2 1.833-2V9c0-2-1.833-2-1.833-2zM8.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
                        </svg>
                     </b></a>
                  <ul class="dropdown-menu form-wrapper">
                     <li>
                        <!-- Form Connexion --------------------------------------------------------- -->
                        <form name="formC" id="formC" action="./serveur/membres/connexionMembre.php" method="post">
                           <!-- <p class="hint-text">Sign in with your social media account</p>
                           <div class="form-group social-btn clearfix">
                              <a href="#" class="btn btn-primary pull-left"><i class="fa fa-facebook"></i> Facebook</a>
                              <a href="#" class="btn btn-info pull-right"><i class="fa fa-twitter"></i> Twitter</a>
                           </div>
                           <div class="or-seperator"><b>or</b></div> 
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Username" required="required"/>
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
                  <a id="newMbr" href="#" data-toggle="dropdown"
                     class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">
                     <b> Devenir Membre &nbsp;<svg width="1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-person-plus"
                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd"
                                 d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                        </svg>&nbsp;</b></a>
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
                           </div>
                           <div class="form-group">
                              <label class="checkbox-inline">
                                 <input type="radio" name="sexeE" value="femme" checked /> Femme </label>
                              <label class="checkbox-inline">
                                 <input type="radio" name="sexeE" value="homme" /> Homme </label>
                              <!-- <label class="checkbox-inline">
                                 <input type="checkbox" required="required" /> I accept the <a href="#">Terms &amp; Conditions</a>
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
            <h1 class="text-center "> Bienvenue <small>sur E-<b>Stream</b></small> </h1>
         </div>
         <!-- Video Gallery - START -->
         <div class="container-fluid pb-video-container">
            <div class="col-md-10 col-md-offset-1">
               <h2>Nos Meilleurs Films</h2>
               <div class="row pb-row">
                  <!-- <div class="col-md-3 pb-video" >
                     <video class="pb-video-frame" width="100%" height="230" src="./donnees/video/Honest.mp4"
                             frameborder="0" allowfullscreen  volume="0"></video>
                     <label class="form-control label-warning text-center">Honest</label>
                  </div> -->
                  <div class="col-md-4 pb-video">
                     <!-- <label class="form-control label-warning text-center">Honest</label> -->
                     <video preload="auto" muted controls poster="./donnees/video/Honest.jpg" type="video/mp4"
                            class="pb-video-frame" width="100%" height="230" src="./donnees/video/Honest.mp4" frameborder="0"
                            allowfullscreen></video>
                     <label class="form-control label-warning text-center">Honest</label>
                  </div>
                  <div class="col-md-4 pb-video">
                     <video preload="auto" muted controls poster="./donnees/video/Marraine-Ou-Presque.jpg" type="video/mp4"
                            class="pb-video-frame" width="100%" height="230" src="./donnees/video/Marraine-Ou-Presque.mp4"
                            frameborder="0" allowfullscreen volume=1>
                     </video>
                     <label class="form-control label-warning text-center">Marraine Ou Presque</label>
                  </div>
                  <div class="col-md-4 pb-video">
                     <video preload="auto" muted controls poster="./donnees/video/Safety.jpg" type="video/mp4"
                            class="pb-video-frame" width="100%" height="230" src="./donnees/video/Safety.mp4" frameborder="0"
                            allowfullscreen volume=1 controls></video>
                     <label class="form-control label-warning text-center">Safety</label> <br>
                  </div>
                  <!-- ............... autoplay ............ -->
                  <div class="col-md-4 pb-video">
                     <video preload="auto" autoplay muted controls type="video/mp4" class="pb-video-frame" width="100%"
                            height="230" src="./donnees/video/Eau-Paisible.mp4" frameborder="0" allowfullscreen volume=1
                            controls></video>
                     <label class="form-control label-warning text-center">Eau Paisible</label>
                  </div>
                  <div class="col-md-4 pb-video">
                     <video preload="auto" autoplay muted controls type="video/mp4" class="pb-video-frame" width="100%"
                            height="230" src="./donnees/video/We-Can-Be-Heroes.mp4" frameborder="0" allowfullscreen></video>
                     <label class="form-control label-warning text-center">We Can Be Heroes</label>
                  </div>
                  <div class="row pb-row">
                     <div class="col-md-4 pb-video">
                        <video preload="auto" autoplay muted controls type="video/mp4" class="pb-video-frame" width="100%"
                               height="230" src="./donnees/video/Le-Tunnel.mp4" frameborder="0" allowfullscreen></video>
                        <label class="form-control label-warning text-center">Le Tunnel</label> <br>
                     </div>
                  </div>
                  <div class="col-md-4 pb-video">
                     <video preload="auto" autoplay muted controls type="video/mp4" class="pb-video-frame" width="100%"
                            height="230" src="./donnees/video/Fatale.mp4" frameborder="0" allowfullscreen></video>
                     <label class="form-control label-warning text-center">Fatale</label>
                  </div>
                  <div class="col-md-4 pb-video">
                     <video preload="auto" autoplay muted controls type="video/mp4" class="pb-video-frame" width="100%"
                            height="230" src="./donnees/video/Hunted.mp4" frameborder="0" allowfullscreen></video>
                     <label class="form-control label-warning text-center">Hunted</label>
                  </div>
                  <div class="col-md-4 pb-video">
                     <video preload="auto" autoplay muted controls type="video/mp4" class="pb-video-frame" width="100%"
                            height="230" src="./donnees/video/Earth.mp4" frameborder="0" allowfullscreen volume="0"></video>
                     <label class="form-control label-warning text-center">Earth</label>
                  </div>
                  <!-- ------------------------------------------------------------------ -->
                  <div class="col-md-9">
                     <h2> </h2> <br>
                     <h2>Nouveautés</h2>
                  </div>
                  <!-- ------------------------------------------------------------------ -->
                  <div class="col-md-4 pb-video">
                     <video preload="auto" autoplay muted controls type="video/mp4" class="pb-video-frame" width="100%"
                            height="230" src="./donnees/video/Earth.mp4" frameborder="0" allowfullscreen volume="0"></video>
                     <label class="form-control label-warning text-center">Earth</label>
                  </div>
                  <div class="col-md-4 pb-video">
                     <video preload="auto" autoplay muted controls type="video/mp4" class="pb-video-frame" width="100%"
                            height="230" src="./donnees/video/Safety.mp4" frameborder="0" allowfullscreen volume="0"></video>
                     <label class="form-control label-warning text-center">Safety</label>
                  </div>
                  <div class="col-md-4 pb-video">
                     <video preload="auto" autoplay muted controls type="video/mp4" class="pb-video-frame" width="100%"
                            height="230" src="./donnees/video/We-Can-Be-Heroes.mp4" frameborder="0" allowfullscreen
                            volume="0"></video>
                     <label class="form-control label-warning text-center">We Can Be Heroes</label> <br>
                  </div>
                  <div class="col-md-4 pb-video">
                     <video preload="auto" autoplay muted controls type="video/mp4" class="pb-video-frame" width="100%"
                            height="230" src="./donnees/video/Le-Tunnel.mp4" frameborder="0" allowfullscreen></video>
                     <label class="form-control label-warning text-center">Le Tunnel</label>
                  </div>
                  <!-- <div class="col-md-3 pb-video">
                     <video class="pb-video-frame" width="100%" height="230"
                             src="https://www.youtube.com/embed/UY1bt8ilps4?ecver=1" frameborder="0" allowfullscreen></video>
                     <label class="form-control label-warning text-center">F.O. and Peeva - Lichnata</label>
                  </div>
                  <div class="col-md-3 pb-video">
                     <video class="pb-video-frame" width="100%" height="230"
                             src="https://www.youtube.com/embed/Jr4TMIU9oQ4?ecver=1" frameborder="0" allowfullscreen></video>
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