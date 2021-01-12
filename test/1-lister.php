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
      <div class="col-sm-2 ">         
         <form action="" method="post" class="form-group col-sm">     
            <h4>Lister</h4>     <br><br><br>
            <input type="text" class="form-group form-control" placeholder="un"/>  
            <button type="button" class="btn btn-info form-control">Tous</button></div>
         </form>
      </div>   
   </body>
</html>

<!--  <div class="form-horizontal">
         <input name="search" id="search" />
         <button class="btn">button</button>
      </div>   -->

 <?php

   $rep="<table border=1>";
   $rep.="<caption>LISTE DES FILMS</caption>";
   $rep.="<tr><th>NUMERO</th><th>TITRE</th><th>DUREE</th><th>REALISATEUR</th></tr>";
   if (!$fic=fopen("../donnees/films.txt", "r")) {
         echo "ERREUR: probleme avec le fichier";
         exit;
   }
   $ligne=fgets($fic);
   while (!feof($fic)) {
         $tab=explode(";", $ligne);
         $rep.="<tr><td>".$tab[0]."</td><td>".$tab[1]."</td><td>".$tab[2]."</td><td>".$tab[3]."</td></tr>";
         $ligne=fgets($fic);
   }
   $rep.="</table>";
   fclose($fic);
   echo $rep;
   ?>