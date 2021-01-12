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
        <div class="col-sm-5">
            <h4>Modifier</h4>
            <form action="" method="post" class="form-group">
                <div class="form-group row ">         
                <div class="col-sm-3">                  
                        <input type="text" class="form-control form-control" placeholder="Film"/>   <br>                
                        <input type="text" class="form-control form-control" placeholder="Film"/> 
                </div>
                <div class="col-sm-3">                  
                        <input type="text" class="form-control form-control" placeholder="Film"/>  <br>                   
                        <input type="text" class="form-control form-control" placeholder="Film"/> <br>
                </div>
                <div class="col-sm-3">                  
                        <input type="text" class="form-control form-control" placeholder="Film"/>  <br>                   
                        <input type="text" class="form-control form-control" placeholder="Film"/> <br>
                </div>
                <div class="col-sm-9"> 
                <button type="button" class="btn btn-primary form-control">Valider</button></div>
                </div>
            </form>
        </div>
        <script language="javascript" src="../js/global.js"></script>
   </body>
</html>

<?php

    $num=$_POST['num'];
    $titre=$_POST['titre'];
    $duree=$_POST['duree'];
    $res=$_POST['res'];
    
    if (!$fic=fopen("../donnees/films.txt", "r")) {
        echo "ERREUR: probleme avec le fichier";
        exit;
    }
    if (!$ficTmp=fopen("../donnees/films.tmp", "w")) {
        echo "ERREUR: probleme de creation du fichier films.tmp";
        exit;
    }
    $ligne=fgets($fic);
    $trouve=false;
    //Supprimer le film
    while (!feof($fic)) {
        $tab=explode(";", $ligne);
        if ($num!==$tab[0]) {
            fputs($ficTmp, $ligne);
        } else {
            $trouve=true;
        }
        $ligne=fgets($fic);
    }
    if ($trouve) {
        $nouvelleLigne=$num.";".$titre.";".$duree.";".$res."\n";
        fputs($ficTmp, $nouvelleLigne);
        echo "<br><b>LE FILM : ".$num." A ETE MODIFIE</b>";
        fclose($fic);
        fclose($ficTmp);
        unlink("../donnees/films.txt");
        rename("../donnees/films.tmp", "../donnees/films.txt");
    } else {
        echo "<br><b>LE FILM : ".$num." EST INTROUVABLE</b>";
    }
   ?>