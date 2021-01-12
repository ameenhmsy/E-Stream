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

   <body>
      <div class="col-sm-3">
         <h4>Enregistrer</h4>
         <form action="" method="post" class="form-group">
            <div class="form-group row ">         
               <div class="col-sm-5">                  
                     <input type="text" class="form-control form-control" placeholder="Film"/>   <br>                
                     <input type="text" class="form-control form-control" placeholder="Film"/> 
               </div>
               <div class="col-sm-5">                  
                     <input type="text" class="form-control form-control" placeholder="Film"/>  <br>                   
                     <input type="text" class="form-control form-control" placeholder="Film"/> <br>
               </div>
               <div class="col-sm-10"> 
               <button type="button" class="btn btn-success form-control">OK</button></div>
            </div>
         </form>
         <div>
         </div>
      </div>
   </body>
</html>

<?php

   $num=$_POST["num"];
   $titre=$_POST['titre'];
   $duree=$_POST['duree'];
   $res=$_POST['res'];
   
   if (!$fic=fopen("../donnees/films.txt", "a")) {
         echo "ERREUR: probleme avec le fichier";
         exit;
   }
   
   $ligne=$num.";".$titre.";".$duree.";".$res."\n";
   fputs($fic, $ligne);
   fclose($fic);
   echo "<br><b>AJOUT DU FILM NUMERO : ".$num."</b>";


?>