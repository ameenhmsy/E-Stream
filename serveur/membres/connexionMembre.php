
<div class="container bg-info">

<?php

    include_once "../../inc/UserConnexion.php";

    $newUser = new UserConnexion(
        $_POST["emailC"], 
        $_POST["passwdC"]
    );
    
    $newUser->userConnect();

/* include_once "../../inc/DbhHandler.php"; 
if ( isset($_POST["Connexion"]) ) { 
    $emailC=$_POST["emailC"];
    $passwdC=$_POST["passwdC"];
} */

// // si Membre Rediriger vers /serveur/membre.php | si Admin Rediriger vers /serveur/admin.php <br>";
// // include_once dirname(__DIR__).DIRECTORY_SEPARATOR."page". DIRECTORY_SEPARATOR."header.php";
// include_once "../../page/header.php";

//    $emailC = $_POST["emailC"];
//    $passwdC = $_POST["passwdC"];
//    $tabErreur = [];

//    //$fichier = fopen("../../donnees/membres.txt", "r+");
//    if (!$fichier = fopen("../../donnees/membres.txt", "r+")) {
//        array_push($tabErreur, "Problème de Lecture de données");
//    }
   
//    $ligne = fgets($fichier);
//    $match = false;

//    while (!feof($fichier)) {
//        $tabLigne = explode(";", $ligne);
//        if ($emailC==$tabLigne[2] && $passwdC==$tabLigne[3]) {
//            $match = true;
//            break;
//        } else {
//            $match = false;
//            $ligne = fgets($fichier) ;
//        }
//    }

//    if ($match) {
//        //  if ($emailC=="admin@NomDeVotreCompagnie.com") {
//        //  fputs($tabLigne[0], "A");
//        if ($tabLigne[1]=="ADMIN") {
//            header("Location: ../admin.php");
//        } else {
//            header("Location: ../membre.php");
//        }
//        //  $message = "Bonjour ".$tabLigne[4];
//    } else {
//        array_push($tabErreur, "Email ou Mot de passe incorrect");
//        //  $message = "";
//        header("Location: ../../page/erreur.php");
//    }
//    //-----------------------------------------------
//    fclose($fichier);

// //    if (!fclose($fichier)) {
// //       array_push($tabErreur, "Problème fermeture de  fichier");
// //   }
//    // $message; $tabErreur;

?>
</div>