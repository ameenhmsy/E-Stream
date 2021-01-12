<!DOCTYPE html>
<html>

   <head>
      <meta charset="utf-8" />
      <title>Admin</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" />
      <link rel="stylesheet" href="../css/index.css" />
      <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css" />
      <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../js/index.js"></script>
   </head>
   <!-- --------------------------------------------------------------------- -->

   <body>
      <?php include_once "../page/header.php"; ?>
      <!-- ----------------------- -->
      <div class="container bg-info page-header text-center">
         <h1> Bienvenue<a class="btn btn-light btn-lg" href="admin.php">Admin</a>  </h1>
      </div> <br>

      <div class="container bg-info">  
         <h2>
            <form method="post">  
               Gestion des Films <input type="submit" name="submitAllF" class="btn btn-light" value="Voir Tous">              
            </form> 
         </h2> <br>         
         <div class="row">
            <!-- ----------------------------------------------------------------- Lister -->
            <div class="dropdown col-sm-3 col-md-3">
               <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                  Lister Un Film
               </button> 
               <div class="dropdown-menu">
                  <div class="dropdown-item"> 
                     <!-- <form action="<?//php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"> -->
                     <form action="" method="post" class="form-inline"> 
                        <div class="">
                           &nbsp;
                           <input type="number" name="idListF" class="form-control" placeholder=" ID  film à lister" required="required"/>  
                           <input type="submit" name="submitListF" class="btn btn-primary btn-small" value=" Lister ">
                           &nbsp;
                        </div> 
                     </form>
                  </div>
               </div>
            </div>
            <!-- ----------------------------------------------------------------- Effacer -->
            <div class="dropdown col-sm-3 col-md-3"> 
               <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
               &nbsp; Effacer Un Film &nbsp;
               </button> 
               <div class="dropdown-menu">
                  <div class="dropdown-item"> 
                     <form action="" method="post" class="form-inline"> 
                        <div class="">
                           &nbsp;
                           <input type="number" name="idEffaceF" class="form-control" placeholder="ID  film à Effacer" required="required"/>  
                           <input type="submit" name="submitEffaceF" class="btn btn-danger btn-small" value="Effacer">                         
                           &nbsp;
                        </div> 
                     </form>
                  </div>
               </div>
            </div>
            <!-- ----------------------------------------------------------------- Ajouter -->
            <div class="dropdown col-sm-3 col-md-3"> 
               <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                  Ajouter Un Film
               </button> 
               <div class="dropdown-menu">
                  <div class="dropdown-item"> 
                     <form action="" method="post" class="form-group" enctype="multipart/form-data" autocomplete="on"> 
                        <div class="ajtMdf">                        
                           <input type="text" class="form-control" name="titreAjoutF"  required="required" placeholder="Titre"/>   
                           <!-- <input type="text" class="form-control" name="categAjoutF"  required="required" placeholder="Catégorie"/> -->
                           <select class="form-control" name="categAjoutF" required="required">
                              <option disabled selected value>Catégorie</option>
                              <option value="Action">Action</option>
                              <option value="Comédie">Comédie</option>
                              <option value="Drame">Drame</option>
                              <option value="Humour">Humour</option>
                           </select> 
                           <input type="text" class="form-control" name="realsAjoutF"  required="required" placeholder="Réalisateur"/>   
                           <input type="text" class="form-control" name="langueAjoutF" required="required" placeholder="Langue (Eng, Fr..)"/>   
                           <input type="text" class="form-control" name="paysAjoutF"   required="required" placeholder="Pays"/>  
                           <input type="time" class="form-control" name="dureeAjoutF"  required="required"/>   
                           <input type="date" class="form-control" name="dateAjoutF"   required="required" value="2021-01-10"/>   
                           <input type="file" class="form-control" name="pochAjoutF"   required="required"/>
                           <input type="file" class="form-control" name="videoAjoutF"  required="required"/> <br>
                           <input type="submit" class="form-control btn btn-success"   name="submitAjoutF" value=" Ajouter"/> 
                        </div> 
                     </form>
                  </div>
               </div>
            </div>
            <!-- ----------------------------------------------------------------- Modifier -->
            <div class="dropdown col-sm-3 col-md-3"> 
               <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                  ⛔ Modifier Un Film
               </button> 
               <div class="dropdown-menu">
                  <div class="dropdown-item"> 
                     <form action="" method="post" class="form-group" enctype="multipart/form-data" autocomplete="on"> 
                        <div class="ajtMdf"> 
                           <input type="number" class="form-control" name="idModF"     placeholder="⭐  ID Film" required="required"/>                        
                           <input type="text" class="form-control" name="titreModF"  placeholder="Titre"/>   
                           <!-- <input type="text" class="form-control" name="categModF" placeholder="Catégorie"/>   -->
                           <select class="form-control" name="categModF">
                              <option  selected value="">Catégorie</option>      <!-- disabled -->
                              <option value="Action">Action</option>
                              <option value="Comédie">Comédie</option>
                              <option value="Drame">Drame</option>
                              <option value="Humour">Humour</option>
                           </select>   
                           <input type="text" class="form-control" name="realsModF"  placeholder="Réalisateur"/>   
                           <input type="text" class="form-control" name="langueModF" placeholder="Langue (Eng, Fr..)"/>   
                           <input type="text" class="form-control" name="paysModF"   placeholder="Pays"/>  
                           <input type="time" class="form-control" name="dureeModF">   
                           <input type="date" class="form-control" name="dateModF"   value="<?php echo date("d-m-Y"); ?>"/>   
                           <input type="file" class="form-control" name="pochModF" />   
                           <input type="file" class="form-control" name="videoModF"/> <br>
                           <input type="submit" class="form-control btn btn-warning" name="submitModF" value=" Modifier"> 
                        </div> 
                     </form>
                  </div>
               </div>   
            </div>  <br> <br> <br>
         </div> 
         <!-- <div class="col-sm-1"> </div> -->

         <div class="col-sm-12">
            <!-- ************************************ -->
            <?php
               include_once "../inc/Lister.php"; // Effacer 1F + lister: 1F, tousF, 1M, tousM

               // Lister All F
               if ( isset($_POST["submitAllF"]) ) {
                  $currentAllF = new Lister(1);  //  1 : id bidon pr le Constructor
                  $currentAllF->listerAllFilm(); 
               }
               
               // Lister 1 F
               if ( isset($_POST["submitListF"]) ) {
                  $idListF = $_POST["idListF"];

                  $currentListF = new Lister($idListF);
                  $currentListF->listerFilm();
                  echo "<br> ";
               }
               else { $idListF = "";  }
               
               // Effacer 1 F
               if ( isset($_POST["submitEffaceF"]) ) {
                  $idEffaceF = $_POST["idEffaceF"];

                  $currentEffaceF = new Lister ($idEffaceF); 
                  $currentEffaceF->effacerFilm();
                  echo "<br> ";
               } 
               else { $idEffaceF = "";   }          

               
               include_once "../inc/ManageFilm.php";

               // Ajouter 1 F
               if ( isset($_POST["submitAjoutF"]) ) {
                  // print_r($_POST);     print_r($_FILES);

                  $titreAjoutF   = $_POST["titreAjoutF"];
                  $categAjoutF   = $_POST["categAjoutF"];
                  $realsAjoutF   = $_POST["realsAjoutF"];
                  $langueAjoutF  = $_POST["langueAjoutF"];
                  $paysAjoutF    = $_POST["paysAjoutF"];
                  $dureeAjoutF   = $_POST["dureeAjoutF"];
                  $dateAjoutF    = $_POST["dateAjoutF"];                  
                  $pochAjoutF    = $_FILES["pochAjoutF"];   // ["tmp_name"];
                  $videoAjoutF   = $_FILES["videoAjoutF"];  // ["tmp_name"];

                  $currentAjoutF = new ManageFilm(
                     $titreAjoutF, $categAjoutF, $realsAjoutF, $langueAjoutF,
                     $paysAjoutF, $dureeAjoutF,$dateAjoutF, $pochAjoutF, $videoAjoutF);

                  $currentAjoutF->ajoutFilm();
               }

               // Modifier 1 F
               if ( isset($_POST["submitModF"]) ) {

                  $idModF      = $_POST["idModF"];
                  $titreModF   = $_POST["titreModF"];
                  $categModF   = $_POST["categModF"];
                  $realsModF   = $_POST["realsModF"];
                  $langueModF  = $_POST["langueModF"];
                  $paysModF    = $_POST["paysModF"];
                  $dureeModF   = $_POST["dureeModF"];
                  $dateModF    = $_POST["dateModF"];                  
                  $pochModF    = $_FILES["pochModF"];   // ["tmp_name"];
                  $videoModF   = $_FILES["videoModF"];  // ["tmp_name"];

                  $currentModF = new ManageFilm(
                     $titreModF, $categModF, $realsModF, $langueModF,
                     $paysModF, $dureeModF,$dateModF, $pochModF, $videoModF);

                  $currentModF->modifierFilm($idModF);

                  
               }
               
            ?>
            <!-- ************************************ -->
         </div>
         
      </div>
      <br> 
      <!-- ============================================================================== -->
      <br>      
      <div class="container bg-info">
         <h2>
            <form method="post">  
               Gestion Membres <input type="submit" name="submitAllM" class="btn btn-light" value="Voir Tous">              
            </form> 
         </h2> <br>            
         <div class="row">
            <!-- ----------------------------------------------------------------- Lister -->
            <div class="dropdown col-sm-3 col-md-3">
               <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                  Lister Membre
               </button> 
               <div class="dropdown-menu">
                  <div class="dropdown-item"> 
                     <form action="" method="post" class="form-inline"> 
                        <div class="">
                           &nbsp;
                           <input type="number" name="idListM" class="form-control" placeholder="ID Membre a lister" required="required"/>  
                           <input type="submit" name="submitListM" class="btn btn-primary btn-small" value=" Lister ">
                           &nbsp;
                        </div> 
                     </form>
                  </div>
               </div>
            </div>
            <!-- ----------------------------------------------------------------- Désactiver -->
            <div class="dropdown col-sm-3 col-md-3"> 
               <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
               Désactiver Membre
               </button> 
               <div class="dropdown-menu">
                  <div class="dropdown-item"> 
                     <form action="" method="post" class="form-inline"> 
                        <div class="">
                           &nbsp;
                           <input type="number" name="idDesactiveM" class="form-control" placeholder="ID  Membre à Désactiver" required="required"/>  
                           <input type="submit" name="submitDesactiveM" class="btn btn-danger btn-small" value="Disable">                         
                           &nbsp;
                        </div> 
                     </form>
                  </div>
               </div> 
            </div>
            <!-- ----------------------------------------------------------------- Activer -->
            <div class="dropdown col-sm-4 col-md-4">
               <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
               Activer Membre &nbsp;
               </button> 
               <div class="dropdown-menu">
                  <div class="dropdown-item"> 
                     <form action="" method="post" class="form-inline"> 
                        <div class="">
                           &nbsp;
                           <input type="number" name="idActiveM" class="form-control" placeholder="ID  Membre à lister" required="required"/>  
                           <input type="submit" name="submitActiveM" class="btn btn-success btn-small" value=" Activer ">
                           &nbsp;
                        </div> 
                     </form>
                  </div>
               </div>
               <?php // code lister ici ..... ?>  
            </div> <br> <br> <br>
         </div>
         <div class="col-sm-1"> </div>
         
         <div class="col-sm-10">
            <!-- ************************************ -->
            <?php
               include_once "../inc/StatutMembre.php"; // Avtiv, Désactiv 1M
               
               // Liste ALL M
               if ( isset($_POST["submitAllM"]) ) {
                  $currentAllM = new Lister(1); //  1 : id  (Admin) pr le Constructor
                  $currentAllM->listerAllMembre(); 
               }
               
               // Lister 1 M
               if ( isset($_POST["submitListM"]) ) {
                  $idListM = $_POST["idListM"];

                  $currentListM = new Lister($idListM);
                  $currentListM->listerMembre();
                  echo "<br> .";
               }
               else { $idListM = "";  }
               
               // Activer 1 M
               if (isset($_POST["submitActiveM"])) {
                  $idActiveM = $_POST["idActiveM"];

                  $currentActivatedM = new StatutMembre($idActiveM);
                  $currentActivatedM->activerM();
               }
               else { $idActiveM = "";  }

               // Desactive 1 M
               if (isset($_POST["submitDesactiveM"])) {
                  $idDesactiveM = $_POST["idDesactiveM"]; //

                  $currentDesactiveM = new StatutMembre($idDesactiveM);
                  $currentDesactiveM->desactiverM();
               }
               else { $idDesactiveM = "";   }
            ?>
            <!-- ************************************ -->
         </div>
        
      </div> <br> <br> <br>

      <!-- ----------------------- -->
      <?php  include_once "../page/footer.php"; ?>
   </body>
</html>

<?php

