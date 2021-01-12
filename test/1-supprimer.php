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
      <div class="col-sm-2">         
         <form action="" method="post" class="form-group">              
            <div class="col-sm form-group">    
               <h4>Supprimer</h4>    <br><br><br>    
               <input type="text" class="form-group form-control" placeholder="Film"/>                   
               <button type="button" class="btn btn-danger form-control">Supp</button></div>
            </div>
         </form>
      </div>   
   </body>
</html>

<?php
   
   $num=$_POST['num'];
   if (!$fic=fopen("../donnees/films.txt", "r")) {
         echo "ERREUR: probleme avec le fichier";
         exit;
   }
   if (!$ficTmp=fopen("../donnees/films.tmp", "w")) {
         echo "ERREUR: probleme de creation du fichier films.tmp";
         exit;
   }
   $ligne=fgets($fic);
   while (!feof($fic)) {
         $tab=explode(";", $ligne);
         if ($num!==$tab[0]) {
            fputs($ficTmp, $ligne);
         }
         $ligne=fgets($fic);
   }
   fclose($fic);
   fclose($ficTmp);
   unlink("../donnees/films.txt");
   rename("../donnees/films.tmp", "../donnees/films.txt");
   echo "<br><b>LE FILM : ".$num." A ETE RETIRE</b>";
?>